<?php


namespace ORM;


use Contracts\DbConnectionInterface;

class OracleDbConnection extends BaseOracleORM implements DbConnectionInterface
{

    public function connectionStatus()
    {
        echo 'Этот сервис работает с Oracle' . PHP_EOL;
    }

    public function closeConnection()
    {
        // TODO: Implement closeConnection() method.
    }
}