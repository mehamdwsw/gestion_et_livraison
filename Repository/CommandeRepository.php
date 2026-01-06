<?php

namespace gestion_et_livraison\Repository;

use gestion_et_livraison\Database\Database;
use gestion_et_livraison\Interface\CrudInterface;
use PDO;
class CommandeRepository extends Database implements CrudInterface
{
    private $db;
    function __construct()
    {
        $db = new Database();
        $this->db = $db->connect();
    }
    public function create(object $entity): bool
    {
        $titre = $entity->gettitre();
        $description = $entity->getdescription();
        $statut = $entity->getstatut();
        $client_id = $entity->getclient_id();
        $sql = "INSERT INTO commande (`titre`, `description`, `statut`,`client_id`) VALUES (?,?,?,?);";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$titre, $description, $statut, $client_id]);
        return $test;
    }

    public function readid(int $id): ?object
    {
        $sql = "SELECT * FROM commande WHERE id = '$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        return $user ?: null;
    }

    public function update(object $entity, $id): bool
    {
        $titre = $entity->gettitre();
        $description = $entity->getdescription();
        $statut = $entity->getstatut();
        $client_id = $entity->getclient_id();
        $sql = "UPDATE commande SET `titre` = ?, `description` = ?, `statut` = ?, `client_id` = ? WHERE `id` = ?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$titre, $description, $statut, $client_id, $id]);
        return $test;
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM commande WHERE `id` = ?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$id]);
        return $test;
    }

    public function listAll(): array
    {
        $sql = "SELECT * FROM commande;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
