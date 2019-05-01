<?php

namespace App\App\ApiModels\Repositories;


use Illuminate\Support\Facades\DB;

class BaseRepository
{
    public const TABLE_NAME = '';

    public const TABLE_ALIAS = '';

    public const OPERATOR_LIST = [
        '>', '<', '!=', '<>', '>=', '<=', '=',
    ];

    /**
     * @param array $where
     * @param array $select
     *
     * @return array
     */
    public function get(array $where = [], array $select = ['*'])
    {
        $query = DB::table(static::TABLE_NAME);

        foreach ($where as $key => $value) {
            if (is_array($value)) {
                $valueList = [];
                foreach ($value as $operator => $item) {
                    if (in_array($operator, self::OPERATOR_LIST)) {
                        $query->where($key, $operator, $value);
                    } else {
                        $valueList[] = $value;
                    }
                }
                $query->whereIn($key, $valueList);
            } else {
                $query->where($key, $value);
            }
        }

        return $query->select($select)->get();
    }
}