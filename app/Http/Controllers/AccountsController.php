<?php

namespace App\Http\Controllers;

use App\App\Helpers\ControllerHelper;
use App\App\Models\ApiModel;
use App\App\NetworkApi\ApiChooserFactory;
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
     * @param Request $request
     * @return array|bool|\Illuminate\Contracts\View\Factory|View
     * @throws \Exception
     */
    public function setAuthorized(Request $request)
    {
        $networkApi = (string)$request->get('networkId');
        $apiUserToken = (string)$request->get('apiUserToken');

        try {
            $apiModel = new ApiModel($networkApi);
            $accessToken = $apiModel
                ->bindUserApi($apiUserToken)
                ->getApiUserToken();

            $api = ApiChooserFactory::getApi($networkApi);

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
     * @param Request $request
     */
    public function check(Request $request)
    {

    }
}