<?php 
     require_once("connexionBD.php");
     $idclient=isset($_POST['idclient'])?$_POST['idclient']:"";
     $nom=isset($_POST['nom'])?$_POST['nom']:"";
     $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
     $civilite=isset($_POST['civilite'])?$_POST['civilite']:"";
     $idprojet=isset($_POST['idprojet'])?$_POST['idprojet']:"";
     $requete="update clients set nom=?, prenom=?, civilite=?,idprojets=? where idclients=?";
     $params=array($nom,$prenom,$civilite,$idprojet,$idclient);
     $resultat=$pdo->prepare($requete);
     $resultat->execute($params);
     header('location:clients.php');
?>
<!-- create table clients(
    idclients int(4) auto_increment primary key,
    nom varchar(50),
    prenom varchar(50),
    civilite varchar(1),
    idprojets int(4)
); -->