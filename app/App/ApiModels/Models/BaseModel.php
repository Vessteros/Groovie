<?php

namespace App\App\ApiModels\Models;


use App\App\ApiModels\DataModels\Requests\Request;
use App\App\ApiModels\DataModels\Responses\Response;

abstract class BaseModel
{
    /**
     * @var Request
     */
    public $request;

    /**
     * @var Response
     */
    public $response;

    /**
     * @return mixed
     */
    public abstract function getDataOrFail();
}