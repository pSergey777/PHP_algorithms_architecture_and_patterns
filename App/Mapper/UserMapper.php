<?php


namespace App\Mapper;


use App\Contracts\StorageAdapterInterface;
use App\Model\Entity\User;

class UserMapper implements \App\Contracts\EntityMapperInterface
{
    private $storageAdapter;

    public function __construct(StorageAdapterInterface $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    public function findById(int $id): ?User
    {
        $result = $this->storageAdapter->find($id);
        if ($result === null) {
            return null;
        }
        return $this->mapRowToUser($result);
    }

    private function mapRowToUser(array $row): User
    {
        return new User($row['id'], $row['name'], $row['login'], $row['password']);
    }
}