<?php

namespace App\App\ApiModels\DataModels\Requests;

/**
 * Interface RequestInterface
 *
 * @property string $remember_token
 *
 * @package App\App\ApiModels\DataModels\Requests
 */
interface RequestDataInterface
{
    public static function parse(array $data);
}