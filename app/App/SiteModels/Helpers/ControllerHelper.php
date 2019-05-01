<?php

namespace App\App\Helpers;

use App\App\Entities\Api\Request\AuthRequestModel;
use App\App\Entities\Api\Request\Models\VkApiDataModel;
use App\App\Models\AuthBlockModel;
use App\App\NetworkApi\VkApi;
use App\Exceptions\AppExceptions\Api\EmptyRequestException;
use \Illuminate\Http\Request;

/**
 * Class ControllerHelper
 * @package App\App\Helpers
 */
class ControllerHelper
{
    /**
     * @param Request $request
     * @return array
     */
    public static function parseJson(Request $request): array
    {
        $request = $request->getContent();

        return json_decode($request, true);
    }

    /**
     * @param Request $request
     * @return AuthRequestModel|VkApiDataModel
     * @throws EmptyRequestException
     */
    public static function getAuthRequestContent(Request $request)
    {
        $contentList = self::parseJson($request);

        switch ($contentList['networkId']) {
            case VkApi::NETWORK_ID:
                $instance = new VkApiDataModel;
                break;

            default:
                $instance = new AuthRequestModel;
                break;
        }

        return $instance
            ->fillInstance($contentList)
            ->checkPlenum();
    }

    /**
     * @return array
     */
    public static function getAuthBlockModels(): array
    {
        /** todo: занести данные в базу, выбирать оттуда */
        $networkArray = [
            'vk' => [
                'authorizationUrl' => 'url1',
                'networkTitle' => 'ВКонтакте'
            ],
            'tg' => [
                'authorizationUrl' => 'url2',
                'networkTitle' => 'Телеграм'
            ],
            'something' => [
                'authorizationUrl' => 'url3',
                'networkTitle' => 'Какая-то соц сеть'
            ]
        ];

        $blockModels = [];

        foreach ($networkArray as $id => $network) {
            $blockModels[] = (new AuthBlockModel)
                ->setNetworkId($id)
                ->setAuthorizationUrl($network['authorizationUrl'])
                ->setNetworkTitle($network['networkTitle']);
        }

        return $blockModels;
    }
}