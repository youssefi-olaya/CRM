<?php
    require_once('connexionBD.php');
    $Montant=isset($_POST['montant'])?$_POST['montant']:"";
    $Idclient=isset($_POST['idclient'])?$_POST['idclient']:"";
    $Idprojet=isset($_POST['idprojet'])?$_POST['idprojet']:"";
    $requete="insert into devis(iddevis,montant,idclients,idprojets) values(?,?,?,?)";
    $params=array($Iddevis,$Montant,$Idclient,$Idprojet);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
    header('location:devis.php');
?>