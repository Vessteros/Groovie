<?php

namespace App\App\ApiModels\DataModels\Requests;

use App\Exceptions\AppExceptions\Api\ApiException;

/**
 * Class Request
 *
 * Модель данных запроса к серверу
 *
 * @package App\App\ApiModels\DataModels\Requests
 */
class Request
{
    /**
     * @var ServiceInfo
     */
    public $serviceInfo;

    /**
     * @var RequestDataInterface
     */
    public $data;

    /**
     * @param array $data
     *
     * @return Request
     * @throws ApiException
     */
    public static function parse(array $data): self
    {
        $instance = new self;

        if (isset($data['service'])) {
            $instance->serviceInfo = ServiceInfo::parse($data['service']);
        }

        if (!isset($data['data'])) {
            throw new ApiException(2002);
        }

        $instance->data = AuthRequest::parse($data['data']);

        return $instance;
    }
}