<?php

namespace App\Exceptions\AppExceptions\Api;


use Throwable;

class ApiException extends \Exception
{
    public $codeList = [
        2001 => 'Missing #FIELD field value. Authorization is not possible.',
        2002 => 'Request body not passed.',
        2003 => 'User not found.',
        2004 => 'Such user already exists.',
        2005 => 'Register passwords are not equal.',
        2006 => 'Отсутствует токен авторизации.',
        2007 => 'Существующий пароль не совпадает с введенным.',
        2008 => 'Не указан id пользователя.',
        2009 => 'Не удалось обновить информацию профиля.',
        2010 => 'Не передан токен авторизации',
        2011 => 'Не удалось установить токен авторизации для пользователя',
        2012 => 'У запрашиваемого пользователя системы Groovie нет токена авторизация в данной сети',
        2013 => 'Не удалось отметить обращение, как багрепорт',
        2014 => 'Не удалось загрузить файл на сервер.',
        2015 => 'Не хватает данных для создания новости.',
        2016 => 'Не удалось создать новость.',
        2017 => 'Не достаточно данных для создания обновления.',
        2018 => 'Не удалось создать обновление.',
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