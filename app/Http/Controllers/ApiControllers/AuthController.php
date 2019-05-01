<?php

namespace App\Http\Controllers\ApiControllers;

use App\Exceptions\AppExceptions\Api\ApiException;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;

class AuthController extends Controller
{
    public function indexAction(Request $request)
    {
        $request = $request->toArray();

        if (!isset($request['login'])) {
            throw new ApiException(2001, ['#FIELD' => '`login`']);
        }

        if (!isset($request['password'])) {
            throw new ApiException(2001, ['#FIELD' => '`password`']);
        }

        return [
            'code'   => 123132,
            'status' => 'success',
            'data'   => [
                'id'    => 1,
                'token' => '123213dsad',
            ],
        ];
    }
}
