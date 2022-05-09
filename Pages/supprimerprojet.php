<?php 
     require_once("connexionBD.php");
     $idprojet=isset($_GET['idprojet'])?$_GET['idprojet']:0;
     $requete="delete from projets  where idprojets=?";
     $params=array($idprojet);
     $resultat=$pdo->prepare($requete);
     $resultat->execute($params);
     header('location:projets.php');
?>

<!-- create table projets(
    idprojets int(4) auto_increment primary key,
    nomprojets varchar(50),
    datedebut  date,
    etatprojet varchar(10)    
); -->