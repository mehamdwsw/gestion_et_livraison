<?php
class UserRepository extends database implements CrudInterface
{
    private $db;
    function __construct()
    {
        $db = new database();
        $this->db = $db->connect();
    }
    public function create(object $entity): bool
    {
        $name = $entity->getname();
        $email = $entity->getemail();
        $password = $entity->getpassword();
        $role = $entity->getrole();
        $sql = "INSERT INTO users (name, email, password,role) VALUES ('$name','$email','$password','$role')";

        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute();
        return $test;
    }

    public function read(int $id): ?object
    {
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute();
        $user=$stmt->fetch(PDO::FETCH_OBJ);
        return $user?:null;
    }

    public function update(object $entity): bool
    {
        $name = $entity->getname();
        $email = $entity->getemail();
        $password = $entity->getpassword();
        $role = $entity->getrole();
        $sql = "INSERT INTO users (name, email, password,role) VALUES ('$name','$email','$password','$role')";

        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute();
        return $test;
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
