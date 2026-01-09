<?php

namespace Repository;
use PDO;
use Database\Database;

class NotificationRepository extends Database 
{
    private $db;
    function __construct()
    {
        $db = new Database();
        $this->db = $db->connect();
    }
    public function create(object $entity): bool
    {
        $message = $entity->getname();
        $user_id = $entity->getemail();
        $role = $entity->getrole();
        $sql = "INSERT INTO notification (message, user_id) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$message, $user_id]);
        return $test;
    }

    public function user_notification(int $id): ?array
    {
        $sql = "SELECT * FROM notification WHERE user_id = '$id';";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    }

    public function read($id): bool
    {
        $is_read=1;
        $sql = "UPDATE notification SET `is_read` = ? WHERE `id` = ?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$is_read,$id]);
        return $test;
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM notification WHERE `id` = ?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$id]);
        return $test;
    }
}
