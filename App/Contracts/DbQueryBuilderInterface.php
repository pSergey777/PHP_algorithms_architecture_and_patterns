<?php


namespace Contracts;


interface DbQueryBuilderInterface
{
    public function getAll();

    public function getAllWhere();

    public function getAllWhereIn();
}