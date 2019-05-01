<?php

namespace App\App\ApiModels\DataModels\Responses\Success;


use App\App\ApiModels\DataModels\Responses\SuccessResponseInterface;

class AuthResponse implements SuccessResponseInterface
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