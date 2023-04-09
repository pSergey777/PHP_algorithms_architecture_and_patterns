<?php


namespace ORM;


use Db\PostgreSql;

abstract class BasePostgreORM
{
    private PostgreSql $postgreConnection;

    public function __construct(PostgreSql $postgreConnection)
    {
        $this->postgreConnection = $postgreConnection;
    }

    public function getPostgreConnection(): PostgreSql
    {
        return $this->postgreConnection;
    }
}