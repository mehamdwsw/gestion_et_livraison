<?php

namespace Repository;
use PDO;
use Database\Database;
use Interface\CrudInterface;

class AdminRepository extends Database implements CrudInterface{
    private $db;
    function __construct()
    {
        $db=new Database();
        $this->db=$db->connect();
    }

   public function create(object $entity): bool
    {
        $name = $entity->getnom();
        $email = $entity->getEmail();
        $password = $entity->getPassword();
        $role = $entity->getrole();
        $sql = "INSERT INTO users (`nom`, `email`, `password`,`role`) VALUES (?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$name, $email, $password, $role]);
        return $test;
    }

    public function readid(int $id): ?object
    {
        $sql = "SELECT * FROM users WHERE id=?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$id]);
        $ff = $stmt->fetchObject(__CLASS__);
        return $ff;
    }

    public function update(object $entity, $id): bool
    {
        $name = $entity->getnom();
        $email = $entity->getEmail();
        $password = $entity->getPassword();
        $role = $entity->getrole();
        $sql = "UPDATE users SET `nom` = ?, `email` = ?, `password` = ?, `role` = ? WHERE `id` = ?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$name, $email, $password, $role, $id]);
        return $test;
    }

    public function delete(int $id): bool
    {

        $sql = "DELETE FROM users WHERE `id` = ?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$id]);
        return $test;
    }

    public function listAll(): array
    {
        $sql = "SELECT * FROM users;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function verify_users($id)
    {
        $Check_role="YES";
        $sql = "UPDATE users SET `Check_role` = ? WHERE `id` = ?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$Check_role,$id]);
        return $test;
    }
    public function active_account($id)
    {
        $is_active=1;
        $sql = "UPDATE users SET `is_active` = ? WHERE `id` = ?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$is_active,$id]);
        return $test;
    }
    public function blok_account($id)
    {
        $is_active=0;
        $sql = "UPDATE users SET `is_active` = ? WHERE `id` = ?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$is_active,$id]);
        return $test;
    }
   
}
