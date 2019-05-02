<?php

namespace App\Http\Controllers\ApiControllers;


use App\App\ApiModels\DataModels\Requests\Request;
use App\App\ApiModels\DataModels\Responses\Response;
use App\App\ApiModels\Models\UserModels\RegisterModel;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request as HttpRequest;

class RegisterController extends Controller
{
    public function indexAction(HttpRequest $requestData)
    {
        $requestData = $requestData->toArray();

        $model = new RegisterModel;
        $model->request = Request::parse($requestData, 'Register');
        $model->response = new Response;
        $model->getDataOrFail();

        return (array)$model->response;
    }
}