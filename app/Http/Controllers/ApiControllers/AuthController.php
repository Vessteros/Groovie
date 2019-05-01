<?php

namespace App\Http\Controllers\ApiControllers;

use \App\App\ApiModels\DataModels\Requests\Request;
use App\App\ApiModels\DataModels\Responses\Response;
use App\App\ApiModels\Models\UserModels\AuthModel;
use App\Exceptions\AppExceptions\Api\ApiException;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request as HttpRequest;

class AuthController extends Controller
{
    /**
     * @param HttpRequest $requestData
     *
     * @return array
     * @throws ApiException
     */
    public function indexAction(HttpRequest $requestData)
    {
        $requestData = $requestData->toArray();

        $model = new AuthModel;
        $model->request = Request::parse($requestData);
        $model->response = new Response;
        $model->getDataOrFail();

        return (array)$model->response;
    }
}
