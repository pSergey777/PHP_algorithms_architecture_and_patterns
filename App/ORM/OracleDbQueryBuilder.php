<?php


namespace ORM;


use Contracts\DbQueryBuilderInterface;

class OracleDbQueryBuilder extends BaseOracleORM implements DbQueryBuilderInterface
{

    public function getAll()
    {
        echo 'Получаю все файлы из таблицы в Oracle базе данных' . PHP_EOL;
    }

    public function getAllWhere()
    {
        // TODO: Implement getAllWhere() method.
    }

    public function getAllWhereIn()
    {
        // TODO: Implement getAllWhereIn() method.
    }
}