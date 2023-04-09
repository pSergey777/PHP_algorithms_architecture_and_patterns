<?php


namespace Contracts;


interface ORMFactoryInterface
{
    public function createDbConnection(): DbConnectionInterface;

    public function createDbRecord(): DbRecordInterface;

    public function createDbQueryBuilder(): DbQueryBuilderInterface;
}