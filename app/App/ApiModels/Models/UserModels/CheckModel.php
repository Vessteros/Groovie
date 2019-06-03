<?php

namespace App\App\ApiModels\Models\UserModels;


use App\App\ApiModels\Models\BaseModel;
use App\App\ApiModels\Repositories\UserRepos\UserRepository;
use App\Exceptions\AppExceptions\Api\ApiException;
use Illuminate\Support\Facades\Hash;

class CheckModel extends BaseModel
{
    public function getDataOrFail()
    {
        // TODO: Implement getDataOrFail() method.
    }

    /**
     * @throws ApiException
     */
    public function checkUserPassword()
    {
        $login = $this->request->data->login;
        $password = $this->request->data->password;

        $userRepository = new UserRepository();

        $existingPassword = $userRepository->getByEmail($login)['password'];

        if (!isset($existingPassword) || !Hash::check($password, $existingPassword)) {
            throw new ApiException(2007);
        }

        $this->response->data = ['valid' => true];
    }
}