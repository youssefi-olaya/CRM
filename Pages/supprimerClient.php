<?php 
     require_once("connexionBD.php");
     $idclient=isset($_GET['idclient'])?$_GET['idclient']:0;
     $requete="delete from clients  where idclients=?";
     $params=array($idclient);
     $resultat=$pdo->prepare($requete);
     $resultat->execute($params);
     header('location:clients.php');
?>