<?php
/**
 * Created by PhpStorm.
 * User: Никита
 * Date: 01.05.2019
 * Time: 20:57
 */

namespace App\Exceptions\AppExceptions\Api;


use Throwable;

class ApiException extends \Exception
{
    public $codeList = [
        2001 => 'Missing #FIELD field value. Authorization is not possible.',
        2002 => 'Request body not passed.',
        2003 => 'User not found.',
        2004 => 'Such user already exists.',
    ];

    /**
     * ApiException constructor.
     *
     * @param int            $code
     * @param array|null     $fields
     * @param Throwable|null $previous
     */
    public function __construct(int $code = 0, array $fields = [], Throwable $previous = null)
    {
        $message = $this->prepareMessage($code, $fields);

        parent::__construct($message, $code, $previous);
    }

    /**
     * @param int        $code
     * @param array|null $fields
     *
     * @return string
     */
    private function prepareMessage(int $code = 0, array $fields = []): string
    {
        $message = $this->codeList[$code];

        foreach ($fields as $key => $value) {
            $message = preg_replace("/$key/", $value, $message);
        }

        return $message;
    }
}