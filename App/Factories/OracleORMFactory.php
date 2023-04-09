<?php


namespace Factories;


use Contracts\DbConnectionInterface;
use Contracts\DbQueryBuilderInterface;
use Contracts\DbRecordInterface;
use Contracts\ORMFactoryInterface;
use Db\Oracle;
use ORM\OracleDbConnection;
use ORM\OracleDbQueryBuilder;
use ORM\OracleDbRecord;

class OracleORMFactory implements ORMFactoryInterface
{
    private Oracle $oracleConnection;

    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    public function createDbConnection(): DbConnectionInterface
    {
        return new OracleDbConnection($this->oracleConnection);
    }

    public function createDbRecord(): DbRecordInterface
    {
        return new OracleDbRecord($this->oracleConnection);
    }

    public function createDbQueryBuilder(): DbQueryBuilderInterface
    {
        return new OracleDbQueryBuilder($this->oracleConnection);
    }
}