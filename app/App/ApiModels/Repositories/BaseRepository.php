<?php

namespace App\App\ApiModels\Repositories;


use Illuminate\Support\Facades\DB;

class BaseRepository
{
    public const TABLE_NAME = '';

    public const TABLE_ALIAS = '';

    public const OPERATOR_LIST = [
        '>',
        '<',
        '!=',
        '<>',
        '>=',
        '<=',
        '=',
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

                if (!empty($valueList)) {
                    $query->whereIn($key, $valueList);
                }
            } else {
                $query->where($key, $value);
            }
        }

        return $query->select($select)->get();
    }

    /**
     * @param array $insert
     *
     * @return mixed
     */
    public function insert(array $insert)
    {
        $query = DB::table(static::TABLE_NAME);

        return $query->insertGetId($insert);
    }

    public function update(array $where = [], array $update = [])
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

                if (!empty($valueList)) {
                    $query->whereIn($key, $valueList);
                }
            } else {
                $query->where($key, $value);
            }
        }

        return $query->update($update);
    }
}