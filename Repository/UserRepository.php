<?php

namespace Repository;
use PDO;
use Database\Database;

class UserRepository extends Database
{
    private $db;
    function __construct()
    {
        $db = new Database();
        $this->db = $db->connect();
    }
    public function login($post): bool
    {
        $email = $post['email'];
        $passe = $post['passe'];
        
        $sql = "SELECT * FROM users WHERE email = ? and password=?;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email,$passe]);
        if ($stmt->fetchAll(PDO::FETCH_ASSOC)) {
            return true;
        } else {
            return false;
        }
    
    }
    public function Check_role($post)
    {
        $email = $post['email'];
        $passe = $post['passe'];
        
        $sql = "SELECT * FROM users WHERE email = ? and password=?;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email,$passe]);
        $lol=$stmt->fetchObject();
        
            return $lol;
       
    }
}
