<?php

namespace App\App\ApiModels\DataModels\Requests;

/**
 * Class ServiceInfo
 *
 * Модель служебных данных
 *
 * @property float version
 *
 * @package App\App\ApiModels\DataModels\Requests
 */
class ServiceInfo
{
    public static function parse(array $data): self
    {
        return new self; //todo: implement
    }
}