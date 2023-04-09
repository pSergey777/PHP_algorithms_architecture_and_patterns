<?php


namespace ORM;


use Contracts\DbQueryBuilderInterface;

class PostgreDbQueryBuilder extends BasePostgreORM implements DbQueryBuilderInterface
{

    public function getAll()
    {
        echo 'Получаю все файлы из таблицы в PostgreSQL базе данных' . PHP_EOL;
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