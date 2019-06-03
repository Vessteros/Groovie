<?php

namespace App\App\ApiModels\Models\UserModels;

use App\App\ApiModels\DataModels\Responses\Success\AuthResponse;
use App\App\ApiModels\Models\BaseModel;
use App\App\ApiModels\Repositories\UserRepos\UserRepository;
use App\Exceptions\AppExceptions\Api\ApiException;
use Illuminate\Support\Facades\Hash;

class AuthModel extends BaseModel
{
    /**
     * Получение данных авторизации
     *
     * @throws ApiException
     */
    public function getDataOrFail()
    {
        $userRepo = new UserRepository;
        $data = new AuthResponse;

        list($login, $password) = [
            $this->request->data->login,
            $this->request->data->password,
        ];

        $user = $userRepo->getByEmail($login);

        $this->validate($user);

        if (!Hash::check($password, $user['password'])) {
            throw new ApiException(2003);
        }

        $data->id = $user['id'];
        $data->token = $user['remember_token'];
        $data->login = $user['email'];
        $data->password = $user['password'];

        $this->response->data = $data;
    }

    /**
     * @param array $user
     *
     * @throws ApiException
     */
    private function validate(array $user) {
        if (empty($user)) {
            throw new ApiException(2003);
        }

        if (!isset($user['remember_token'])) {
            throw new ApiException(2006);
        }

        if(!isset($user['email'])) {
            throw new ApiException(2003);
        }

        if(!isset($user['password'])) {
            throw new ApiException(2003);
        }
    }
}