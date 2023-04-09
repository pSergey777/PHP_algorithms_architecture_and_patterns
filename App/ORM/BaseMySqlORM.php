<?php


namespace ORM;


use Db\MySql;

abstract class BaseMySqlORM
{
    private MySql $mysqlConnection;

    public function __construct(MySql $mysqlConnection)
    {
        $this->mysqlConnection = $mysqlConnection;
    }

    public function getMysqlConnection(): MySql
    {
        return $this->mysqlConnection;
    }
}