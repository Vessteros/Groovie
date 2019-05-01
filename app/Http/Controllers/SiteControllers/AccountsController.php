<?php

namespace App\Http\Controllers\SiteControllers;

use App\App\Helpers\ControllerHelper;
use App\App\Models\ApiModel;
use App\App\NetworkApi\ApiChooserFactory;
use App\Http\Controllers\Controller;
use \Illuminate\View\View;
use \Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * AccountsController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $authBlocks = ControllerHelper::getAuthBlockModels();

        return view(
            'app.accounts.accounts',
            [
                'content' => $authBlocks,
            ]
        );
    }

    public function home()
    {
        return view('app.home.home');
    }

    /**
     * @param Request $request
     * @return string
     * @throws \Exception
     */
    public function auth(Request $request): string
    {
        try {
            $content = ControllerHelper::getAuthRequestContent($request);

            session(['cur_network_id' => $content->getNetworkId()]);

            $api = ApiChooserFactory::getApi($content->getNetworkId());
        } catch (\Throwable $t) {
            die($t->getMessage());
        }

        return $api->auth();
    }

    /**
     * @link /account/authorized/set
     * @param Request $request
     * @return array|bool|\Illuminate\Contracts\View\Factory|View
     * @throws \Exception
     */
    public function setAuthorized(Request $request)
    {
        $networkId = (string)$request->get('networkId');
        $apiUserToken = (string)$request->get('apiUserToken');

        try {
            $apiModel = new ApiModel($networkId);
            $accessToken = $apiModel
                ->bindUserApi($apiUserToken)
                ->getApiUserToken();

            $api = ApiChooserFactory::getApi($networkId);

            $data = $api->getProfileInfo($accessToken);
        } catch (\Throwable $t) {
            return $t->getMessage();
        }

        return $data;
    }

    /**
     * @return View
     */
    public function authorizedIndex(): View
    {
        return view(
            'app.accounts.authorized',
            [
                'content' => [],
            ]
        );
    }

    /**
     * @link /account/auth/check
     * @param Request $request
     *
     * @return array|string
     */
    public function check(Request $request)
    {
        // $data = [
        //     'phone' => '79683721934', // Телефон получателя
        //     'body' => 'Тестовая запись', // Сообщение
        // ];
        // $json = json_encode($data); // Закодируем данные в JSON
        //
        // // URL для запроса POST /message
        // $url = 'https://eu16.chat-api.com/instance31124/message?token=s555s3nwnibksjg9';
        // // Сформируем контекст обычного POST-запроса
        // $options = stream_context_create(['http' => [
        //     'method'  => 'POST',
        //     'header'  => 'Content-type: application/json',
        //     'content' => $json
        // ]
        // ]);
        // // Отправим запрос
        // $result = file_get_contents($url, false, $options);
        // var_dump($result); die;
        // return $result;
        $data = [];

        $networkId = (string)$request->get('networkId');

        try {
            $apiModel = new ApiModel($networkId);
            $accessToken = $apiModel
                ->getApiUserToken();

            $api = ApiChooserFactory::getApi($networkId);

            if ($accessToken !== '') {
                $data = $api->getProfileInfo($accessToken);
            }
        } catch (\Throwable $t) {
            return $t->getMessage();
        }

        return $data;
    }
}