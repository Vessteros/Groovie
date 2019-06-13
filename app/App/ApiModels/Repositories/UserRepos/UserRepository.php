<?php

namespace App\App\ApiModels\Repositories\UserRepos;


use App\App\ApiModels\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public const TABLE_NAME = 'users';

    public function getById(int $id)
    {
        return (array)$this
            ->get(['id' => $id])
            ->first();
    }

    public function getByEmail(string $email): array
    {
        return (array)$this
            ->get(['email' => $email])
            ->first();
    }

    public function getByToken(string $token): array
    {
        return (array)$this
            ->get(['remember_token' => $token])
            ->first();
    }
}