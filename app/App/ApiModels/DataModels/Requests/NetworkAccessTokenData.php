<?php

namespace App\App\ApiModels\DataModels\Requests;


use App\Exceptions\AppExceptions\Api\ApiException;

class NetworkAccessTokenData implements RequestDataInterface
{
    public $api_user_id;
    public $network_id;
    public $access_token;
    // public $expire_at;

    /**
     * @param array $data
     *
     * @return NetworkAccessTokenData
     * @throws ApiException
     */
    public static function parse(array $data): self
    {
        $instance = new self;

        foreach ($instance as $key => $value) {
            if (empty($data[$key])) {
                throw new ApiException(2001, ['#FIELD' => $key]);
            }

            $instance->{$key} = $data[$key];
        }

        return $instance;
    }
}