<?php

namespace App\App\ApiModels\DataModels\Requests;


use App\Exceptions\AppExceptions\Api\ApiException;

class ProfileData implements RequestDataInterface
{
    public $id;

    public $name;

    public $lastName;

    public $login;

    public $currentPassword;

    public $newPassword;

    /**
     * @param array $data
     *
     * @return ProfileData
     * @throws ApiException
     */
    public static function parse(array $data)
    {
        $instance = new self;

        foreach ($data as $key => $value) {
            $instance->{$key} = $value ?? '';
        }

        if (empty($instance->id)) {
            throw new ApiException(2001, ['#FIELD' => "`id`"]);
        }

        if (!empty($instance->newPassword) && empty($instance->currentPassword)) {
            throw new ApiException(2007);
        }

        return $instance;
    }
}