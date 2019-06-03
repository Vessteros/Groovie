<?php

namespace App\App\ApiModels\Models\UserModels;


use App\App\ApiModels\Models\BaseModel;
use App\App\ApiModels\Repositories\UserRepos\UserApiRepository;
use App\App\ApiModels\Repositories\UserRepos\UserRepository;
use App\Exceptions\AppExceptions\Api\ApiException;
use Illuminate\Support\Facades\Hash;

class ProfileModel extends BaseModel
{
    public function getDataOrFail()
    {
        // TODO: Implement getDataOrFail() method.
    }

    /**
     * @throws ApiException
     */
    public function saveChanges()
    {
        $data = $this->request->data;
        $userRepository = new UserRepository;

        if (!isset($data->id)) {
            throw new ApiException(2008);
        }

        if (!empty($data->currentPassword)) {
            $existingPassword = $userRepository->get(['id' => $data->id], ['password'])->first()->password;

            if (!isset($existingPassword) || !Hash::check($data->currentPassword, $existingPassword)) {
                throw new ApiException(2007);
            }
        }

        $update = [
            'name'     => $data->name,
            'lastName' => $data->lastName,
            'email'    => $data->login,
            'password' => Hash::make($data->newPassword),
        ];

        $update = array_filter($update, function ($item) {
            return !empty($item);
        });

        $updated = $userRepository->update(['id' => $data->id], $update);

        if (!$updated) {
            throw new ApiException(2009);
        }

        $this->response->data = ['updated' => true];
    }

    public function getUser()
    {
        $data = $this->request->data;

        $userRepository = new UserRepository;

        $user = (array)$userRepository->get(['id' => $data->id, 'remember_token' => $data->remember_token])->first();
        $user['login'] = $user['email'];
        unset($user['email']);

        $this->response->data = $user;
    }

    public function findUserByToken(string $token): array
    {
        $userRepository = new UserRepository;

        return (array)$userRepository->get(['remember_token' => $token])->first();
    }

    /**
     * @throws ApiException
     */
    public function setNetworkAccessToken()
    {
        $data = $this->request->data;
        $apiBindRepository = new UserApiRepository;

        $user = $this->findUserByToken($data->remember_token);

        if (empty($user)) {
            throw new ApiException(2003);
        }

        $tokenExists = (array)$apiBindRepository->get([
            'user_id'    => $user['id'],
            'network_id' => $data->network_id,
        ])->first();

        if (!empty($tokenExists)) {
            $apiBindRepository->update([
                'user_id'    => $user['id'],
                'network_id' => $data->network_id,
            ], ['access_token' => $data->access_token]);
        } else {
            $id = $apiBindRepository->insert([
                'user_id'      => $user['id'],
                'api_user_id'  => $data->api_user_id,
                'network_id'   => $data->network_id,
                'access_token' => $data->access_token,
                'expire_at'    => $data->expire_at ?? '',
            ]);

            if (empty($id)) {
                throw new ApiException(2011);
            }
        }

        $this->response->data = ['access_token' => $data->access_token];
    }

    /**
     * @throws ApiException
     */
    public function getNetworkAccessToken()
    {
        $data = $this->request->data;

        $apiBindRepository = new UserApiRepository;

        $user = $this->findUserByToken($data->remember_token);

        if (empty($user)) {
            throw new ApiException(2003);
        }

        $bindInfo = (array)$apiBindRepository->get([
            'user_id'    => $user['id'],
            'network_id' => $data->network_id,
        ])->first();

        if (empty($bindInfo) || empty($bindInfo['access_token'])) {
            throw new ApiException(2012);
        }

        $this->response->data = ['access_token' => $bindInfo['access_token']];
    }

    /**
     * @throws ApiException
     */
    public function getConnectedNetworks()
    {
        $token = $this->request->data->remember_token;

        $apiBindRepository = new UserApiRepository;

        $user = $this->findUserByToken($token);

        if (empty($user)) {
            throw new ApiException(2003);
        }

        $userNetworks = (array)$apiBindRepository->get(['user_id' => $user['id']])->all();

        $result = [];
        foreach ($userNetworks as $network) {
            $result['network_list'][] = [
                'id'           => $network->id,
                'api_user_id'  => $network->api_user_id,
                'network_id'   => $network->network_id,
                'access_token' => $network->access_token,
            ];
        }

        $this->response->data = $result;
    }
}