<?php 
     require_once("connexionBD.php");
     $iddevis=isset($_GET['iddevis'])?$_GET['iddevis']:0;
     $requete="delete from devis  where iddevis=?";
     $params=array($iddevis);
     $resultat=$pdo->prepare($requete);
     $resultat->execute($params);
     header('location:devis.php');
?>