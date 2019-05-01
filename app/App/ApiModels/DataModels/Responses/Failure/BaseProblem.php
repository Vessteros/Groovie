<?php

namespace App\App\ApiModels\DataModels\Responses\Failure;


use App\App\ApiModels\DataModels\Responses\FailureResponse;

class BaseProblem implements FailureResponse
{
    /**
     * @var int
     */
    public $line;

    /**
     * @var string
     */
    public $message = 'Something went wrong';
}