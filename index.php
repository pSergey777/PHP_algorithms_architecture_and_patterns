<?php
declare(strict_types=1);

use Db\MySql;
use Db\Oracle;
use Db\PostgreSql;
use Factories\MySqlORMFactory;
use Factories\OracleORMFactory;
use Factories\PostgreORMFactory;
use Services\ORMService;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^App/', '', $className);
    require_once __DIR__. DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . $className . '.php';
});

$postgreFactory = new PostgreORMFactory(new PostgreSql());
$postgreORM = new ORMService($postgreFactory);
$postgreORM->connectionInfo();
$postgreORM->getAll();
$postgreORM->insert();

$oracleFactory = new OracleORMFactory(new Oracle());
$oracleORM = new ORMService($oracleFactory);
$oracleORM->connectionInfo();
$oracleORM->getAll();
$oracleORM->insert();

$mysqlFactory = new MySqlORMFactory(new MySql());
$mysqlORM = new ORMService($mysqlFactory);
$mysqlORM->connectionInfo();
$mysqlORM->getAll();
$mysqlORM->insert();

