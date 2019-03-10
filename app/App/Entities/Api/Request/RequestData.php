<?php

namespace App\App\Entities\Api\Request;


interface RequestData
{
    public function checkPlenum();

    public function fillInstance(array $contentList);
}