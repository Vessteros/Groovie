<?php

namespace App\App\ApiModels\DataModels\Requests;

/**
 * Interface RequestInterface
 *
 * @package App\App\ApiModels\DataModels\Requests
 */
interface RequestDataInterface
{
    public static function parse(array $data);
}