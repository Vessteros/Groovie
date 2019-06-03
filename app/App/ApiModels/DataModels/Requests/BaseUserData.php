<?php
namespace App\App\ApiModels\DataModels\Requests;


use App\Exceptions\AppExceptions\Api\ApiException;

class BaseUserData implements RequestDataInterface
{
    public $id;

    /**
     * @param array $data
     *
     * @return BaseUserData
     * @throws ApiException
     */
    public static function parse(array $data): self
    {
        $instance = new self;

        if (empty($data['id']) || empty($data['token'])) {
            throw new ApiException(2003);
        }

        $instance->id = $data['id'];
        $instance->remember_token = $data['token'];

        return $instance;
    }
}