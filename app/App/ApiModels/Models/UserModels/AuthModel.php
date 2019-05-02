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

        $where = [
            // не отображаются, потому что типом переменной используется интерфейс
            'email'    => $this->request->data->login,
        ];

        $userData = (array)$userRepo
            ->get($where)
            ->first();

        if (!Hash::check($this->request->data->password, $userData['password'])) {
            throw new ApiException(2003);
        }

        $data = new AuthResponse;
        $data->id = $userData['id'];
        $data->token = $userData['remember_token'];

        $this->response->data = $data;
    }
}