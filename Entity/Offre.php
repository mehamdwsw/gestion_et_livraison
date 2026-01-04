<?php
class Offre
{
    private $prix;
    private $duree;
    private $vehicule;
    private $options;
    private $commande_id;
    private $livreur_id;



    function __construct($prix, $duree, $vehicule, $options, $commande_id, $livreur_id)
    {
        $this->prix = $prix;
        $this->duree = $duree;
        $this->vehicule = $vehicule;
        $this->options = $options;
        $this->commande_id = $commande_id;
        $this->livreur_id = $livreur_id;
    }


    public function getLivreur_id()
    {
        return $this->livreur_id;
    }
    public function setLivreur_id($livreur_id)
    {
        $this->livreur_id = $livreur_id;

        return $this;
    }
    public function getCommande_id()
    {
        return $this->commande_id;
    }
    public function setCommande_id($commande_id)
    {
        $this->commande_id = $commande_id;

        return $this;
    }
    public function getOptions()
    {
        return $this->options;
    }
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }
    public function getVehicule()
    {
        return $this->vehicule;
    }
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;

        return $this;
    }
    public function getDuree()
    {
        return $this->duree;
    }
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
    public function toString()
    {
        return " =>| prix: " . $this->getprix() . "<br>" .
            " =>| duree: " . $this->getduree() . "<br>" .
            " =>| vehicule: " . $this->getvehicule() . "<br>" .
            " =>| options: " . $this->getoptions()."<br>".
            " =>| commande_id: " . $this->getcommande_id()."<br>".
            " =>| livreur_id: " . $this->getlivreur_id();
    }
}
