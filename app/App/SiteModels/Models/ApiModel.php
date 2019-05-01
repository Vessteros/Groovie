<?php

namespace App\App\Models;


use App\App\NetworkApi\VkApi;

class ApiModel
{
    /**
     * @var string
     */
    protected $networkId;

    /**
     * @var string
     */
    protected $apiUserToken;

    protected $apiModel;

    public function __construct(string $networkId)
    {
        $this->networkId = $networkId;

        switch ($this->networkId) {
            case VkApi::NETWORK_ID:
                $this->apiModel = new VkApiModel($this->networkId);
                break;
        }

    }

    /**
     * Связываем мастер аккаунт с токеном из указанной социальной сети
     *
     * @param string $apiUserToken
     *
     * @return $this
     * @throws \Exception
     */
    public function bindUserApi(string $apiUserToken)
    {
        $this->apiModel->bindUserApi($apiUserToken);

        return $this;
    }

    /**
     * @return string
     */
    public function getApiUserToken(): string
    {
        return $this->apiModel->getApiUserToken();
    }
}