<?php

namespace Repository;
use PDO;
use Database\Database;
use Interface\CrudInterface;

class OffreRepository extends Database implements CrudInterface
{
    private $db;
    function __construct()
    {
        $db = new Database();
        $this->db = $db->connect();
    }
    public function create(object $entity): bool
    {
        $prix = $entity->getprix();
        $duree = $entity->getduree();
        $vehicule = $entity->getvehicule();
        $options = $entity->getoptions();
        $commande_id = $entity->getcommande_id();
        $livreur_id = $entity->getlivreur_id();
        $sql = "INSERT INTO offre (`prix`, `duree`, `vehicule`,`options`,`commande_id`,`livreur_id`) VALUES (?,?,?,?,?,?);";

        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$prix, $duree, $vehicule, $options, $commande_id, $livreur_id]);
        return $test;
    }

    public function readid(int $id): ?object
    {
        $sql = "SELECT * FROM offre WHERE id = '$id'";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        return $user ?: null;
    }

    public function update(object $entity, $id): bool
    {
        $prix = $entity->getprix();
        $duree = $entity->getduree();
        $vehicule = $entity->getvehicule();
        $options = $entity->getoptions();
        $commande_id = $entity->getcommande_id();
        $livreur_id = $entity->getlivreur_id();
        $sql = "UPDATE offre SET `prix` = ?, `duree` = ?, `vehicule` = ?, `options` = ? ,`commande_id` = ?,`livreur_id` = ? WHERE `id` = ?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$prix, $duree, $vehicule, $options, $commande_id, $livreur_id, $id]);
        return $test;
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM offre WHERE `id` = ?;";
        $stmt = $this->db->prepare($sql);
        $test = $stmt->execute([$id]);
        return $test;
        return true;
    }

    public function listAll(): array
    {
        $sql = "SELECT * FROM offre;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
