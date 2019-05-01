<?php

namespace App\App\ApiModels\DataModels\Entities;


class DUser
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $rememberToken;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var
     */
    public $updatedAt;
}