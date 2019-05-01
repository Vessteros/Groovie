<?php

namespace App\App\ApiModels\DataModels\Responses\Success;


use App\App\ApiModels\DataModels\Responses\SuccessResponse;

class AuthResponse implements SuccessResponse
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $token;
}