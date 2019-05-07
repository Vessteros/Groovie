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
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sname;

    /**
     * @param array $data
     *
     * @return RegisterData
     * @throws ApiException
     */
    public static function parse(array $data)
    {
        $instance = new self;

        foreach ($data as $key => $value) {
            $instance->{$key} = $value ?? '';
        }

        if (empty($instance->login)) {
            throw new ApiException(2001, ['#FIELD' => "`login`"]);
        }

        if (empty($instance->password)) {
            throw new ApiException(2001, ['#FIELD' => "`password`"]);
        }

        if (empty($instance->rePass)) {
            throw new ApiException(2001, ['#FIELD' => "`rePass`"]);
        }

        return $instance;
    }
}