<?php

namespace App\App\ApiModels\DataModels\Requests;


use App\Exceptions\AppExceptions\Api\ApiException;

class RegisterData implements RequestDataInterface
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
     * @var string
     */
    public $rePass;

    /**
     * @param array $data
     *
     * @return RegisterData
     * @throws ApiException
     */
    public static function parse(array $data)
    {
        $instance = new self;

        foreach ($instance as $key => $value) {
            if (!isset($data[$key])) {
                throw new ApiException(2001, ['#FIELD' => "`$key`"]);
            }
        }

        $instance->login = $data['login'];
        $instance->password = $data['password'];
        $instance->rePass = $data['rePass'];

        return $instance;
    }
}