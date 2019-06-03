<?php

namespace App\Http\Controllers\ApiControllers;


use App\App\ApiModels\DataModels\Requests\Request;
use App\App\ApiModels\DataModels\Responses\Response;
use App\App\ApiModels\Models\UserModels\CheckModel;
use App\App\ApiModels\Models\UserModels\ProfileModel;
use App\Exceptions\AppExceptions\Api\ApiException;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request as HttpRequest;
use stdClass;

class ProfileController extends Controller
{
    /**
     * @param HttpRequest $requestData
     *
     * @return array
     * @throws ApiException
     */
    public function checkPasswordAction(HttpRequest $requestData)
    {
        $requestData = $requestData->toArray();

        $model = new CheckModel;
        $model->request = Request::parse($requestData, 'Auth');
        $model->response = new Response;
        $model->checkUserPassword();

        return (array)$model->response;
    }

    /**
     * @param HttpRequest $requestData
     *
     * @return array
     * @throws ApiException
     */
    public function saveProfileChangesAction(HttpRequest $requestData)
    {
        $requestData = $requestData->toArray();

        $model = new ProfileModel;
        $model->request = Request::parse($requestData, 'Profile');
        $model->response = new Response;
        $model->saveChanges();

        return (array)$model->response;
    }

    public function userGetAction(HttpRequest $requestData, int $id)
    {
        $token = $requestData->header('token');

        $model = new ProfileModel;
        $model->request = Request::parse(['id' => $id, 'token' => $token], 'BaseUser');
        $model->response = new Response;
        $model->getUser();

        return (array)$model->response;
    }

    /**
     * Сохранение токена авторизации в социальной сети
     *
     * @param HttpRequest $requestData
     *
     * @return array
     * @throws ApiException
     */
    public function setNetworkAccessTokenAction(HttpRequest $requestData)
    {
        $token = $requestData->header('token');
        $this->checkTokenExists($token);

        $requestData = $requestData->toArray();

        $model = new ProfileModel;
        $model->request = Request::parse($requestData, 'NetworkAccessToken');
        $model->request->data->remember_token = $token;
        $model->response = new Response;
        $model->setNetworkAccessToken();

        return (array)$model->response;
    }

    /**
     * Получение токена авторизации пользователя в сторонней социальной сети
     *
     * @param HttpRequest $requestData
     *
     * @return array
     * @throws ApiException
     */
    public function getNetworkAccessTokenAction(HttpRequest $requestData)
    {
        $token = $requestData->header('token');
        $this->checkTokenExists($token);

        $requestData = $requestData->toArray();

        $model = new ProfileModel;
        $model->request = Request::parse($requestData, 'NetworkGetter');
        $model->request->data->remember_token = $token;
        $model->response = new Response;
        $model->getNetworkAccessToken();

        return (array)$model->response;
    }

    /**
     * @param HttpRequest $requestData
     *
     * @return array
     * @throws ApiException
     */
    public function getConnectedNetworksAction(HttpRequest $requestData)
    {
        $token = $requestData->header('token');
        $this->checkTokenExists($token);

        $model = new ProfileModel;
        $model->request = new Request;
        $model->request->data = new StdClass;
        $model->request->data->remember_token = $token;
        $model->response = new Response;
        $model->getConnectedNetworks();

        return (array)$model->response;
    }

    /**
     * @param string $token
     *
     * @throws ApiException
     */
    protected function checkTokenExists(string $token)
    {
        if (empty($token)) {
            throw new ApiException(2010);
        }
    }
}