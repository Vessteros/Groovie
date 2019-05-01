<?php

namespace App\App\Models;

/**
 * Class AuthBlockModel
 * @package App\App\Models
 */
final class AuthBlockModel
{
    /**
     * @var string
     */
    private $networkId;

    /**
     * @var string
     */
    private $authorizationUrl;

    /**
     * @var string
     */
    private $networkTitle;

    /**
     * @return mixed
     */
    public function getNetworkId()
    {
        return $this->networkId;
    }

    /**
     * @param mixed $networkId
     * @return AuthBlockModel
     */
    public function setNetworkId($networkId)
    {
        $this->networkId = $networkId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorizationUrl()
    {
        return $this->authorizationUrl;
    }

    /**
     * @param mixed $authorizationUrl
     * @return AuthBlockModel
     */
    public function setAuthorizationUrl($authorizationUrl)
    {
        $this->authorizationUrl = $authorizationUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNetworkTitle()
    {
        return $this->networkTitle;
    }

    /**
     * @param mixed $networkTitle
     * @return AuthBlockModel
     */
    public function setNetworkTitle($networkTitle)
    {
        $this->networkTitle = $networkTitle;
        return $this;
    }

    public function __toString()
    {
        return json_encode([
            'networkId' => $this->networkId,
            'authorizationUrl' => $this->authorizationUrl,
            'networkTitle' => $this->networkTitle,
        ]);
    }
}