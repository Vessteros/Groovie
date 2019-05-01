<?php

namespace App\Http\Controllers\ApiControllers;

use App\App\ApiModels\DataModels\Requests\AuthRequest;
use App\App\ApiModels\DataModels\Responses\Response;
use App\App\ApiModels\Models\UserModels\AuthModel;
use App\Exceptions\AppExceptions\Api\ApiException;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @param Request $requestData
     *
     * @return array
     * @throws ApiException
     */
    public function indexAction(Request $requestData)
    {
        $requestData = $requestData->toArray();

        $model = new AuthModel;
        $model->request = (new AuthRequest)->init($requestData);
        $model->response = new Response;
        $model->getAuthDataOrFail();

        return (array)$model->response;
    }
}
