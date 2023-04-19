<?php


namespace App\EntityManager;


use App\Contracts\EntityMapperInterface;
use App\IdentityMap\IdentityMap;
use App\Mapper\UserMapper;

class EntityManager
{
    private IdentityMap $identityMap;
    private EntityMapperInterface $mapper;

    public function __construct(IdentityMap $identityMap, EntityMapperInterface $mapper)
    {
        $this->identityMap = $identityMap;
        $this->mapper = $mapper;
    }

    public function findById(string $class, int $id)
    {
        $entity = $this->identityMap->find($class, $id);
        if ($entity) {
            return $entity;
        }

        $entity = $this->mapper->findById($id);
        if ($entity === null) {
            return null;
        }

        $this->identityMap->add($entity);

        return $entity;
    }
}