<?php

namespace App\App\NetworkApi;

/**
 * Interface NetworkApiInstance
 * @package App\App\NetworkApi
 */
interface NetworkApiInstance
{
    function auth();

    function getProfileInfo(string $accessToken);
}