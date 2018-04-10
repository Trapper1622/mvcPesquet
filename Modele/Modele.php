<?php

abstract class Modele
{
  // Objet PDO d'accès à la BDD
  private $bdd;

  // Execute une requete SQL éventuellement paramétré
  protected function executerRequete($sql, $params = null) {
    if ($params == null) {
      $resultat = $this->getBdd()->query($sql); // execution directe
    }
    else {
      $resultat = $this->getBdd()->prepare($sql); // requete preparé
      $resultat->execute($params);
    }
    return $resultat;
  }

  // Renvoie un objet de connexion à la BDD en initialisant la connexion au besoin
  private function getBdd() {
    if ($this->bdd == null) {
      // Creation de la connexion
      $this->bdd = new PDO("mysql:host=localhost;dbname=monblog;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    return $this->bdd;
  }
}


