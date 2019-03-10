<?php

namespace App\App\Entities\Api\Request\Models;


use App\App\Entities\Api\Request\RequestData;
use App\Exceptions\AppExceptions\Api\EmptyRequestException;

final class VkApiDataModel implements RequestData
{
    /**
     * @var string
     */
    protected $networkId;

    /**
     * @return string
     */
    public function getNetworkId(): string
    {
        return $this->networkId;
    }

    /**
     * @param string $networkId
     * @return VkApiDataModel
     */
    public function setNetworkId(string $networkId): VkApiDataModel
    {
        $this->networkId = $networkId;
        return $this;
    }

    /**
     * @param array $contentList
     * @return VkApiDataModel
     */
    public function fillInstance(array $contentList): self
    {
        foreach ($this as $prop => $value) {
            if (isset($contentList[$prop])) {
                $this->{'set' . ucfirst($prop)}($contentList[$prop]);
            }
        }

        return $this;
    }

    /**
     * @return VkApiDataModel
     * @throws EmptyRequestException
     */
    public function checkPlenum(): self
    {
        foreach ($this as $prop => $value) {
            if (is_null($this->{$prop})) {
                throw new EmptyRequestException('Пустое значение поля ' . $prop);
            }
        }

        return $this;
    }
}