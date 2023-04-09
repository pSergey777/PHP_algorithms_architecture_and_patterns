<?php


namespace ORM;


use Contracts\DbQueryBuilderInterface;

class MySqlDbQueryBuilder extends BaseMySqlORM implements DbQueryBuilderInterface
{

    public function getAll()
    {
        echo 'Получаю все файлы из таблицы в MySQL базе данных' . PHP_EOL;
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