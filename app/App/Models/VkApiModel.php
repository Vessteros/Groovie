<?php

namespace App\App\Models;


use App\App\Repository\VkApiRepository;

final class VkApiModel
{
    /**
     * @var string
     */
    private $networkId;

    /**
     * @var VkApiRepository
     */
    private $repository;

    /**
     * VkApiModel constructor.
     *
     * @param string $networkId
     */
    public function __construct(string $networkId)
    {
        $this->networkId = $networkId;
        $this->repository = new VkApiRepository;
    }

    /**
     * @param string $apiUserToken
     *
     * @return VkApiModel
     * @throws \Exception
     */
    public function bindUserApi(string $apiUserToken): self
    {
        if (is_null($apiUserToken)) {
            throw new \Exception('Не были переданы значения параметров `code` / `state` / `apiUserId` / `expiresIn`');
        }

        $this
            ->repository
            ->bindUserApi(
                $apiUserToken,
                $this->networkId
            );

        return $this;
    }

    /**
     * @return string
     */
    public function getApiUserToken(): string
    {
        return $this
            ->repository
            ->getAccessToken($this->networkId);
    }
}