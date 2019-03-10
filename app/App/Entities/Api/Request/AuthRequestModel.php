<?php

namespace App\App\Entities\Api\Request;

use App\Exceptions\AppExceptions\Api\EmptyRequestException;

/**
 * Class AuthRequestModel
 * @package App\App\Entities\Api\Request
 */
final class AuthRequestModel implements RequestData
{
    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $authorizationUrl;

    /**
     * @var string
     */
    protected $networkId;

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return AuthRequestModel
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     * @return AuthRequestModel
     */
    public function setAuthorizationUrl($authorizationUrl)
    {
        $this->authorizationUrl = $authorizationUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     * @return AuthRequestModel
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getNetworkId(): string
    {
        return $this->networkId;
    }

    /**
     * @param string $networkId
     * @return AuthRequestModel
     */
    public function setNetworkId(string $networkId)
    {
        $this->networkId = $networkId;
        return $this;
    }

    /**
     * @return AuthRequestModel
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

    /**
     * @param array $contentList
     * @return AuthRequestModel
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

}