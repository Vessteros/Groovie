<?php

namespace App\App\ApiModels\Models\UserModels;


use App\App\ApiModels\DataModels\Responses\Success\AuthResponse;
use App\App\ApiModels\Models\BaseModel;
use App\App\ApiModels\Repositories\UserRepos\UserRepository;
use App\Exceptions\AppExceptions\Api\ApiException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;

class RegisterModel extends BaseModel
{
    /**
     * @return void
     * @throws ApiException
     */
    public function getDataOrFail()
    {
        $userRepo = new UserRepository;
        
        $data = $this->request->data;

        if ($data->password !== $data->rePass) {
            throw new ApiException(2005);
        }

        $insert = [
            'name'           => $data->name . ' ' . $data->sname,
            'email'          => $data->login,
            'password'       => Hash::make($data->password),
            'remember_token' => str_random(60),
        ];

        $data = new AuthResponse;

        try {
            $userData = (array)$userRepo
                ->get(['id' => $userRepo->insert($insert)])
                ->first();

            $data->id = $userData['id'];
            $data->token = $userData['remember_token'];
        } catch (QueryException $e) {
            throw new ApiException(2004);
        }

        $this->response->data = $data;
    }
}