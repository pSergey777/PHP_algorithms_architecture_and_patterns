<?php


namespace Services;


use Contracts\ORMFactoryInterface;

class ORMService
{
    private $dbConnection;
    private $dbRecord;
    private $dbQueryBuilder;

    public function __construct(ORMFactoryInterface $ORMFactory)
    {
        $this->dbConnection = $ORMFactory->createDbConnection();
        $this->dbRecord = $ORMFactory->createDbRecord();
        $this->dbQueryBuilder = $ORMFactory->createDbQueryBuilder();
    }

    public function closeConnection()
    {
        $this->dbConnection->closeConnection();
    }

    public function connectionInfo()
    {
        $this->dbConnection->connectionStatus();
    }

    public function getAll()
    {
        $this->dbQueryBuilder->getAll();
    }

    public function insert()
    {
        $this->dbRecord->insertOne();
    }

}