<?php 
     require_once("connexionBD.php");
     $Iddevis=isset($_POST['iddevis'])?$_POST['iddevis']:"";
     $Montant=isset($_POST['montant'])?$_POST['montant']:"";
     $IdProjet=isset($_POST['idprojet'])?$_POST['idprojet']:"";
     $IdClient=isset($_POST['idclient'])?$_POST['idclient']:"";
     $requete="update devis set montant=?,idprojets=?,idclients=? where iddevis=?";
     $params=array($Montant,$IdProjet,$IdClient,$Iddevis);
     $resultat=$pdo->prepare($requete);
     $resultat->execute($params);
     header('location:devis.php');
?>