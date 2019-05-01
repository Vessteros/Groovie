<?php

namespace App\App\ApiModels\Models\UserModels;


use App\App\ApiModels\DataModels\Requests\AuthRequest;
use App\App\ApiModels\DataModels\Responses\Response;

class AuthModel
{
    /**
     * @var AuthRequest
     */
    public $request;

    /**
     * @var Response
     */
    public $response;

    /**
     * Получение данных авторизации
     */
    public function getAuthDataOrFail()
    {

    }
}