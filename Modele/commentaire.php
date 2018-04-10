<?php

require_once "Modele/Modele.php";

class Commentaire extends Modele 
{
  // Renvoie la liste des commentaires associés à un billet
  public function getCommentaires($idBillet) {
    $sql = "SELECT COM_ID AS id, COM_DATE AS date," . " COM_AUTEUR AS auteur, COM_CONTENU AS contenu FROM T_COMMENTAIRE" . " WHERE BIL_ID=?";
    $commentaires = $this->executerRequete($sql, array($idBillet));
    return $commentaires;
  }

  // Ajoute un commentaire dans la base
  public function ajouterCommentaire($auteur, $contenu, $idBillet) {
    $sql = "INSERT INTO T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)" . " VALUES(NOW(), ?, ?, ?)";
    $this->executerRequete($sql, array($auteur, $contenu, $idBillet));
  }
}