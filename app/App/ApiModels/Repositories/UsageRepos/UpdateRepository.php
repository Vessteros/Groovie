<?php

namespace App\App\ApiModels\Repositories\UsageRepos;


use App\App\ApiModels\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class UpdateRepository extends BaseRepository
{
    public const TABLE_NAME = 'bugreports';

    public const ADDITIONAL_TABLE_NAME = 'bugreports_changes';

    public function setBugreport(array $data): bool
    {
        $id = $this->insert([
            'user_id'     => 1,
            'title'       => $data['title'],
            'description' => $data['message'],
            'status'      => 'created',
        ]);

        foreach ($data['items'] as $item) {
            DB::table(self::ADDITIONAL_TABLE_NAME)
                ->insertGetId([
                    'bugreport_id' => $id,
                    'changes_text' => $item,
                ]);
        }

        return true;
    }
}