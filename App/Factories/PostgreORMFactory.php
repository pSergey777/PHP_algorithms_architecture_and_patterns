<?php


namespace Factories;


use Contracts\DbConnectionInterface;
use Contracts\DbQueryBuilderInterface;
use Contracts\DbRecordInterface;
use Contracts\ORMFactoryInterface;
use Db\PostgreSql;
use ORM\PostgreDbConnection;
use ORM\PostgreDbQueryBuilder;
use ORM\PostgreDbRecord;

class PostgreORMFactory implements ORMFactoryInterface
{
    private PostgreSql $postgreConnection;

    public function __construct(PostgreSql $postgreConnection)
    {
        $this->postgreConnection = $postgreConnection;
    }

    public function createDbConnection(): DbConnectionInterface
    {
        return new PostgreDbConnection($this->postgreConnection);
    }

    public function createDbRecord(): DbRecordInterface
    {
        return new PostgreDbRecord($this->postgreConnection);
    }

    public function createDbQueryBuilder(): DbQueryBuilderInterface
    {
        return new PostgreDbQueryBuilder($this->postgreConnection);
    }
}