<?php

namespace App\Http\Controllers\AdminControllers;

use App\App\ApiModels\AdminModels\FeedbackModel;
use App\App\ApiModels\Helpers\Util;
use App\Exceptions\AppExceptions\Api\ApiException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    /**
     * ContentController constructor.
     */
    public function __construct()
    {
        $this->middleware('admin.auth')->except('logout');
    }

    public function indexAction()
    {
        return view(
            'adminPanel.menuItems.reviews',
            [
                'page' => 1,
            ]
        );
    }

    public function newsAction()
    {
        return view(
            'adminPanel.menuItems.news',
            [
                'page' => 2,
            ]
        );
    }

    public function updatesAction()
    {
        return view(
            'adminPanel.menuItems.updates',
            [
                'page' => 3,
            ]
        );
    }

    /**
     * @param Request $requestData
     *
     * @return array
     * @throws ApiException
     */
    public function getFeedbackListAction(Request $requestData)
    {
        // $token = $requestData->header('token');

        // if (!Util::checkUser($token)) {
        //     throw new ApiException(2003);
        // }

        return (new FeedbackModel)->getFeedbackList();
    }

    /**
     * @param Request $requestData
     * @param int     $id
     *
     * @return array
     * @throws ApiException
     */
    public function setFeedbackBugreportAction(Request $requestData, int $id)
    {
        return (new FeedbackModel)
            ->setFeedbackAsBugreport($id);
    }

    /**
     * @param Request $requestData
     * @param int     $id
     *
     * @return array
     * @throws ApiException
     */
    public function setFeedbackClosedAction(Request $requestData, int $id)
    {
        return (new FeedbackModel)
            ->setFeedbackClosed($id);
    }

    /**
     * @param Request $requestData
     *
     * @return array
     * @throws ApiException
     */
    public function createNewsAction(Request $requestData)
    {
        $file = $requestData->file('image');
        $data = $requestData->toArray();

        return (new FeedbackModel)->createNews($data, $file);
    }

    /**
     * @param Request $requestData
     *
     * @return array
     * @throws ApiException
     */
    public function createUpdateAction(Request $requestData)
    {
        $data = $requestData->toArray();;
        return (new FeedbackModel)->createUpdate($data);
    }
}
