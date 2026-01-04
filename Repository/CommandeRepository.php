<?php
class CommandeRepository extends database implements CrudInterface
{
    private $db;
    function __construct()
    {
        $db = new database();
        $this->db = $db->connect();
    }
    public function create(object $entity): bool
    {
        return true;
    }

    public function readid(int $id): ?object
    {
        return $this->db;
    }

    public function update(object $entity, $id): bool
    {
        return true;
    }

    public function delete(int $id): bool
    {
        return true;
    }

    public function listAll(): array
    {
        return [];
    }
}
