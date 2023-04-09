<?php


namespace Contracts;


interface DbConnectionInterface
{
    public function connectionStatus();

    public function closeConnection();
}