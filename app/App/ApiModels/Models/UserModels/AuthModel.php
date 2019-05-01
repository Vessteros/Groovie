<?php

namespace App\App\ApiModels\Models\UserModels;

use App\App\ApiModels\DataModels\Requests\Request;
use App\App\ApiModels\DataModels\Responses\Response;
use App\App\ApiModels\DataModels\Responses\Success\AuthResponse;
use App\App\ApiModels\Repositories\UserRepos\UserRepository;
use App\Exceptions\AppExceptions\Api\ApiException;

class AuthModel
{
    /**
     * @var Request
     */
    public $request;

    /**
     * @var Response
     */
    public $response;

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
            'password' => $this->request->data->password,
        ];

        $userData = (array)$userRepo
            ->get($where)
            ->first();

        if (!isset($userData['id'])) {
            throw new ApiException(2003);
        }

        $data = new AuthResponse;
        $data->id = $userData['id'];
        $data->token = $userData['remember_token'];

        $this->response->data = $data;
    }
}