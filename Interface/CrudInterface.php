<?php
interface CrudInterface {
    public function create(object $entity): bool;

    public function readId(int $id): ?object;

    public function update(object $entity,$id): bool;

    public function delete(int $id): bool;

    public function listAll(): array;
}