<?php

namespace App\App\ApiModels\Repositories\UserRepos;


use App\App\ApiModels\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public const TABLE_NAME = 'users';

    public function getByEmail(string $email): array
    {
        return (array)$this
            ->get(['email' => $email])
            ->first();
    }
}