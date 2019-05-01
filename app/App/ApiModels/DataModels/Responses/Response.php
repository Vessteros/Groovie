<?php

namespace App\App\ApiModels\DataModels\Responses;

/**
 * Class Response
 *
 * @property SuccessResponseInterface data
 * @property FailureResponseInterface problem
 *
 * @package App\App\ApiModels\DataModels\Responses
 */
class Response
{
    /**
     * @var int
     */
    public $code = 200;

    /**
     * @var string
     */
    public $status = 'success';

    /**
     * @return false|string
     */
    public function __toString()
    {
        return json_encode($this, JSON_UNESCAPED_UNICODE);
    }
}