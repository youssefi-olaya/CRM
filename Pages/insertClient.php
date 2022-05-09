<?php 
     require_once("connexionBD.php");
     $nomClient=isset($_POST['nom'])?$_POST['nom']:"";
     $prenomClient=isset($_POST['prenom'])?$_POST['prenom']:"";
     $civilite=isset($_POST['civilite'])?$_POST['civilite']:"";
     $IdProjet=isset($_POST['idprojet'])?$_POST['idprojet']:"";
     $requete="insert into clients(idclients,nom,prenom,civilite,idprojets)values(?,?,?,?,?)";
     $params=array($IDClient,$nomClient,$prenomClient,$civilite,$IdProjet);
     $resultat=$pdo->prepare($requete);
     $resultat->execute($params);
     header('location:clients.php');
?>