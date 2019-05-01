<?php

namespace App\App\ApiModels\DataModels\Responses\Failure;


use App\App\ApiModels\DataModels\Responses\FailureResponseInterface;

/**
 * @property string message
 * @property int    line
 * @property string file
 */
class BaseProblem implements FailureResponseInterface
{
}