<?php

namespace App\App\Repository;


use Illuminate\Support\Facades\DB;

abstract class Repository
{
    /**
     * @param $where
     * @param $select
     * @return array
     */
//    public function get($where, $select): array
//    {
//        $result = DB::table(static::TABLE_NAME)
//            ->select($select);
//
//        foreach ($where as $column => $value) {
//            $result->where($column, '=', $value);
//        }
//
//        $result->get();
//
//        return (array)$result;
//    }
}