<?php

namespace App\App\NetworkApi;

use App\App\Repository\VkApiRepository;
use VK\Client\VKApiClient;
use VK\OAuth\Scopes\VKOAuthUserScope;
use VK\OAuth\VKOAuth;
use VK\OAuth\VKOAuthDisplay;
use VK\OAuth\VKOAuthResponseType;

/**
 * Class VkApi
 *
 * @package App\App\NetworkApi
 */
class VkApi implements NetworkApiInstance
{
    const NETWORK_ID = 'vk';

    const VK_CLIENT_ID     = 'VK_CLIENT_ID';
    const VK_REDIRECT_URL  = 'VK_REDIRECT_URL';
    const VK_REDIRECT_URL2 = 'VK_REDIRECT_URL2';
    const VK_STATE         = 'VK_STATE';

    /**
     * @var self
     */
    private $_instance;

    /**
     * @var VKOAuth
     */
    private $_oauth;

    /**
     * VkApi constructor.
     */
    public function __construct()
    {
        $this->_instance = new VKApiClient;
        $this->_oauth = new VKOAuth;
    }

    /**
     * @return string
     */
    public function auth()
    {
        $clientId = getenv(self::VK_CLIENT_ID);
        $redirectUri = getenv(self::VK_REDIRECT_URL);
        $display = VKOAuthDisplay::PAGE;
        $scope = [
            // VKOAuthUserScope::NOTIFY,
            VKOAuthUserScope::FRIENDS,
            VKOAuthUserScope::PHOTOS,
            VKOAuthUserScope::AUDIO,
            VKOAuthUserScope::VIDEO,
            // VKOAuthUserScope::PAGES,
            // VKOAuthUserScope::LINK,
            VKOAuthUserScope::STATUS,
            // VKOAuthUserScope::NOTES,
            // VKOAuthUserScope::ADS,
            VKOAuthUserScope::OFFLINE,
            VKOAuthUserScope::DOCS,
            // VKOAuthUserScope::GROUPS,
            VKOAuthUserScope::NOTIFICATIONS,
            VKOAuthUserScope::STATS,
            VKOAuthUserScope::EMAIL,
        ];
        $state = getenv(self::VK_STATE);

        $browserUrl = $this
            ->_oauth
            ->getAuthorizeUrl(
                VKOAuthResponseType::TOKEN,
                $clientId,
                $redirectUri,
                $display,
                $scope,
                $state,
                null,
                true
            );

        return $browserUrl;
    }

    /**
     * @deprecated стал использовать Implicit flow
     *
     * @param string $code
     *
     * @return mixed
     * @throws \VK\Exceptions\VKClientException
     * @throws \VK\Exceptions\VKOAuthException
     */
    public function getAccessToken(string $code)
    {
        $clientId = getenv(self::VK_CLIENT_ID);
        $clientSecret = 'EYjzdXUgOl7jezikJgeG';
        $redirectUri = getenv(self::VK_REDIRECT_URL);
        $response = $this
            ->_oauth
            ->getAccessToken(
                $clientId,
                $clientSecret,
                $redirectUri,
                $code
            );

        return $response['access_token'];
    }

    /**
     * @param string $accessToken
     *
     * @return mixed
     * @throws \VK\Exceptions\VKApiException
     * @throws \VK\Exceptions\VKClientException
     */
    public function getProfileInfo(string $accessToken)
    {
        return (array)$this
            ->_instance
            ->account()
            ->getInfo($accessToken, []);
    }
}