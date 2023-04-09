<?php


namespace Contracts;


interface DbRecordInterface
{
    public function getOne();

    public function insertOne();

    public function updateOne();

    public function deleteONe();
}