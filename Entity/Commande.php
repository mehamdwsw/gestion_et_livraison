<?php

namespace gestion_et_livraison\Entity;

class Commande
{
    private  $titre;
    private  $description;
    private  $statut;
    private  $client_id;


    function __construct($titre, $description, $statut, $client_id)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->statut = $statut;
        $this->client_id = $client_id;
    }
    public function getStatut()
    {
        return $this->statut;
    }
    public function setStatut($statut)
    {
        $this->statut = $statut;
        return $this;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
    
    public function getClient_id()
    {
        return $this->client_id;
    }
    public function setClient_id($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }
     public function toString()
    {
        return " =>| titre: " . $this->gettitre() . "<br>" .
            " =>| description: " . $this->getdescription() . "<br>" .
            " =>| statut: " . $this->getstatut() . "<br>". "<br>" .
            " =>| client_id: " . $this->getclient_id() . "<br>";
    }
}
