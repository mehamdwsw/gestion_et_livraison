<?php
interface CrudInterface {
    public function create(object $entity): bool;

    public function read(int $id): ?object;

    public function update(object $entity): bool;

    public function delete(int $id): bool;

    public function listAll(): array;
}