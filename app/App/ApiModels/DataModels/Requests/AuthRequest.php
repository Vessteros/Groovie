<?php

namespace App\App\ApiModels\DataModels\Requests;


use App\Exceptions\AppExceptions\Api\ApiException;

class AuthRequest
{
    /**
     * @var string
     */
    public $login;

    /**
     * @var string
     */
    public $password;

    /**
     * @param array $request
     *
     * @return AuthRequest
     * @throws ApiException
     */
    public function init(array $request): self
    {
        if (!isset($request['login'])) {
            throw new ApiException(2001, ['#FIELD' => '`login`']);
        }

        if (!isset($request['password'])) {
            throw new ApiException(2001, ['#FIELD' => '`password`']);
        }

        $this->login = $request['login'];
        $this->password = $request['password'];

        return $this;
    }
}