<?php


namespace ORM;


use Contracts\DbConnectionInterface;

class PostgreDbConnection extends BasePostgreORM implements DbConnectionInterface
{

    public function connectionStatus()
    {
        echo 'Этот сервис работает с PostgreSQL' . PHP_EOL;
    }

    public function closeConnection()
    {
        // TODO: Implement closeConnection() method.
    }
}