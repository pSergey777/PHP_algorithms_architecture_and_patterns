<?php


namespace Factories;


use Contracts\DbConnectionInterface;
use Contracts\DbQueryBuilderInterface;
use Contracts\DbRecordInterface;
use Contracts\ORMFactoryInterface;
use Db\MySql;
use ORM\MysqlDbConnection;
use ORM\MySqlDbQueryBuilder;
use ORM\MySqlDbRecord;

class MySqlORMFactory implements ORMFactoryInterface
{
    private MySql $mySqlConnection;

    public function __construct(MySql $mySqlConnection)
    {
        $this->mySqlConnection = $mySqlConnection;
    }

    public function createDbConnection(): DbConnectionInterface
    {
        return new MysqlDbConnection($this->mySqlConnection);
    }

    public function createDbRecord(): DbRecordInterface
    {
        return new MySqlDbRecord($this->mySqlConnection);
    }

    public function createDbQueryBuilder(): DbQueryBuilderInterface
    {
        return new MySqlDbQueryBuilder($this->mySqlConnection);
    }
}