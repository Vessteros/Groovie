<?php

namespace App\App\ApiModels\AdminModels;


use App\App\ApiModels\Repositories\UsageRepos\FeedbackRepository;
use App\App\ApiModels\Repositories\UsageRepos\NewsRepository;
use App\App\ApiModels\Repositories\UsageRepos\UpdateRepository;
use App\App\ApiModels\Repositories\UserRepos\UserRepository;
use App\Exceptions\AppExceptions\Api\ApiException;

class FeedbackModel
{
    public $uplDir = '/home/v/vessteros/groovie/public_html/resources/img/uploads/';

    public function getFeedbackList()
    {
        $repository = new FeedbackRepository;
        $userRepository = new UserRepository;

        $feedbackList = (array)$repository->get(['closed' => false])->all();

        $result = [];
        foreach ($feedbackList as $feedback) {
            $user = $userRepository->get(['id' => $feedback->user_id])->first();

            $result[] = [
                'feedback_title'           => $feedback->review_title,
                'feedback_person_name'     => $user->name,
                'feedback_person_lastname' => $user->lastName,
                'feedback_person_message'  => $feedback->review_text,
                'feedback_id'              => $feedback->id,
            ];
        }

        return $result;
    }

    /**
     * @param int $feedbackId
     *
     * @return array
     * @throws ApiException
     */
    public function setFeedbackAsBugreport(int $feedbackId): array
    {
        $repository = new FeedbackRepository;

        if (!$repository->update(['id' => $feedbackId], ['is_bugreport' => true])) {
            throw new ApiException(2013);
        }

        return ['success' => true];
    }

    /**
     * @param int $feedbackId
     *
     * @return array
     * @throws ApiException
     */
    public function setFeedbackClosed(int $feedbackId): array
    {
        $repository = new FeedbackRepository;

        if (!$repository->update(['id' => $feedbackId], ['closed' => true])) {
            throw new ApiException(2013);
        }

        return ['success' => true];
    }

    /**
     * @param array $data
     * @param null  $file
     *
     * @return array
     * @throws ApiException
     */
    public function createNews(array $data = [], $file = null): array
    {
        if (isset($file)) {
            $uplfile = $this->uplDir . basename($file) . '.jpg';

            if (!move_uploaded_file($file, $uplfile)) {
                throw new ApiException(2014);
            }
        }

        if (empty($data['title']) || empty($data['message'])) {
            throw new ApiException(2015);
        }

        $repository = new NewsRepository;

        $meh = $repository->insert([
            'user_id'    => 1,
            'news_title' => $data['title'],
            'news_text'  => $data['message'],
            'img_url'    => $uplfile ?? '',
            'visibility' => $data['visibility'] ?? 'both',
        ]);

        if (!$meh) {
            throw new ApiException(2016);
        }

        return [
            'success' => true,
        ];
    }

    /**
     * @param array $data
     *
     * @return array
     * @throws ApiException
     */
    public function createUpdate(array $data = []): array
    {
        if (empty($data)
            || empty($data['title'])
            || empty($data['message'])
            || empty($data['items'])
        ) {
            throw new ApiException(2017);
        }

        $repository = new UpdateRepository;

        $meh = $repository->setBugreport($data);

        if (!$meh) {
            throw new ApiException(2018);
        }

        return [
            'success' => true,
        ];
    }
}