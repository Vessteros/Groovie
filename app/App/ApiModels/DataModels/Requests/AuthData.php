<?php

namespace App\App\ApiModels\DataModels\Requests;


use App\Exceptions\AppExceptions\Api\ApiException;

class AuthData implements RequestDataInterface
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
     * @return AuthData
     * @throws ApiException
     */
    public static function parse(array $data): self
    {
        $instance = new self;

        foreach ($instance as $key => $value) {
            if (!isset($data[$key])) {
                throw new ApiException(2001, ['#FIELD' => "`$key`"]);
            }
        }

        $instance->login = $data['login'];
        $instance->password = $data['password'];

        return $instance;
    }
}