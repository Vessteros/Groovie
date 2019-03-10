<?php

namespace App\App\NetworkApi;

use Illuminate\Http\Request;

/**
 * Class ApiChooserFactory
 * @package App\App\NetworkApi
 */
final class ApiChooserFactory
{
    const API_ID_LIST = [
        'vk' => VkApi::class,
    ];

    /**
     * ApiChooserFactory constructor.
     */
    private function __construct() {}

    /**
     * @param string $networkId
     *
     * @return NetworkApiInstance
     * @throws \Exception
     */
    public static function getApi(string $networkId): NetworkApiInstance
    {
        $class = self::API_ID_LIST[$networkId];

        if (is_null($class)) {
            throw new \Exception('Сервис пока не может авторизировать вас в этой социальной сети');
        }

        return new $class;
    }
}