<?php

namespace App\App\ApiModels\DataModels\Requests;


use App\Exceptions\AppExceptions\Api\ApiException;

class NetworkGetterData implements RequestDataInterface
{
    public $network_id;

    /**
     * @param array $data
     *
     * @return NetworkGetterData
     * @throws ApiException
     */
    public static function parse(array $data): self
    {
        $instance = new self;

        if (empty($data['network_id'])) {
            throw new ApiException(2001, ['#FIELD' => 'network_id']);
        }

        $instance->network_id = $data['network_id'];


        return $instance;
    }
}