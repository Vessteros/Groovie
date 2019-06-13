<?php

namespace App\App\ApiModels\Helpers;


use App\App\ApiModels\Repositories\UserRepos\UserRepository;

class Util
{
    public static function checkUser(string $token = null): bool
    {
        $repository = new UserRepository;

        if (!isset($token)
            || empty($repository->getByToken($token))
        ) {
            return false;
        }

        return true;
    }
}