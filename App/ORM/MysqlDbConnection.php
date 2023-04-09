<?php


namespace ORM;


use Contracts\DbConnectionInterface;

class MysqlDbConnection extends BaseMySqlORM implements DbConnectionInterface
{

    public function connectionStatus()
    {
        echo 'Этот сервис работает с MySQL' . PHP_EOL;
    }

    public function closeConnection()
    {
        // TODO: Implement closeConnection() method.
    }
}