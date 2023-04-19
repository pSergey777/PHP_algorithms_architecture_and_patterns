<?php


namespace App\Contracts;


interface StorageAdapterInterface
{
    public function find(int $id): ?array;
}