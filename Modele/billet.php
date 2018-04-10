<?php

require_once "Modele/Modele.php";

class Billet extends Modele
{
  // Renvoie la liste de tous les billets, triés par id décroissant
  public function getBillets() {
    $sql = "SELECT BIL_ID as id, BIL_DATE as date," . " BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET" . " ORDER BY BIL_ID DESC";
    $billets = $this->executerRequete($sql);
    return $billets;
  }

  // Renvoie les informations sur un billet
  public function getBillet($idBillet) {
    $sql ="SELECT BIL_ID AS id, BIL_DATE AS date, " . " BIL_TITRE AS titre, BIL_CONTENU AS contenu FROM T_BILLET" . " WHERE BIL_ID=?";
    $billet = $this->executerRequete($sql, array($idBillet));
    if ($billet->rowCount() == 1)
      return $billet->fetch(); // Accès à la première ligne du résultat
    else
      throw new Exception("Aucun billet ne correspond à l'identifiant , '$idBillet'");  
  }
}
