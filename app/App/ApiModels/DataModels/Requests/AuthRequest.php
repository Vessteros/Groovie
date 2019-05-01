<?php

namespace App\App\ApiModels\DataModels\Requests;


use App\Exceptions\AppExceptions\Api\ApiException;

class AuthRequest implements RequestDataInterface
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
     * @param array $data
     *
     * @return AuthRequest
     * @throws ApiException
     */
    public static function parse(array $data): self
    {
        $instance = new self;

        if (!isset($data['login'])) {
            throw new ApiException(2001, ['#FIELD' => '`login`']);
        }

        if (!isset($data['password'])) {
            throw new ApiException(2001, ['#FIELD' => '`password`']);
        }

        $instance->login = $data['login'];
        $instance->password = $data['password'];

        return $instance;
    }
}