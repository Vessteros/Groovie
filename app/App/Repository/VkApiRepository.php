<?php

namespace App\App\Repository;


use App\App\NetworkApi\VkApi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VkApiRepository extends Repository
{
    /**
     * @param string $accessToken
     * @param string $networkId
     *
     * @return bool
     */
    public function bindUserApi(string $accessToken, string $networkId): bool
    {
        $id = DB::table(UserApiRepository::TABLE_NAME)
            ->insertGetId([
                'user_id'      => Auth::id(),
                'api_user_id'  => getenv(VkApi::VK_CLIENT_ID),
                'network_id'   => $networkId,
                'access_token' => $accessToken,
                'expire_at'    => null,
            ]);

        return (bool)$id;
    }

    /**
     * @param string $networkId
     *
     * @return string
     */
    public function getAccessToken(string $networkId): string
    {
        return DB::table(UserApiRepository::TABLE_NAME)
            ->where('user_id', '=', Auth::id())
            ->where('network_id', '=', $networkId)
            ->select('access_token')
            ->first()
            ->access_token;
    }
}