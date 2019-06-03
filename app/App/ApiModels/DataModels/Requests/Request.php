<?php

namespace App\App\ApiModels\DataModels\Requests;

/**
 * Class Request
 *
 * Модель данных запроса к серверу
 *
 * @package App\App\ApiModels\DataModels\Requests
 */
class Request
{
    const DATA_MODELS_REFER = '\App\App\ApiModels\DataModels\Requests\\';
    /**
     * @var ServiceInfo
     */
    public $serviceInfo;

    /**
     * @var RequestDataInterface
     */
    public $data;

    /**
     * @param array  $data
     *
     * @param string $dataRequest
     *
     * @return Request
     */
    public static function parse(array $data, string $dataRequest): self
    {
        $instance = new self;

        if (isset($data['service'])) {
            $instance->serviceInfo = ServiceInfo::parse($data['service']);
        }

        $refer = self::DATA_MODELS_REFER;
        $dataModel = "{$refer}{$dataRequest}Data";
        $instance->data = $dataModel::parse($data);

        return $instance;
    }
}