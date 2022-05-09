<?php 
     require_once("connexionBD.php");
     $idprojet=isset($_POST['idprojet'])?$_POST['idprojet']:"";
     $nomprojet=isset($_POST['nomprojet'])?$_POST['nomprojet']:"";
     $datedebut=isset($_POST['datedebut'])?$_POST['datedebut']:"";
     $etatactuel=isset($_POST['etatprojet'])?$_POST['etatprojet']:"";
     $requete="update projets set nomprojets=?, datedebut=?,etatprojet=? where idprojets=?";
     $params=array($nomprojet,$datedebut,$etatactuel,$idprojet);
     $resultat=$pdo->prepare($requete);
     $resultat->execute($params);
     header('location:projets.php');
?>
<!-- :create table projets(
    idprojets int(4) auto_increment primary key,
    nomprojets varchar(50),
    datedebut  date,
    etatprojet varchar(10)    
); -->