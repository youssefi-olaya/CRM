<?php
    require_once('connexionBD.php');
    // $IdFacture =isset($_POST['Idfacture'])?$_POST['Idfacture']:"";
    $DateFacture=isset($_POST['Datefacture'])?$_POST['Datefacture']:"";
    $Iddevis =isset($_POST['Iddevis'])?$_POST['Iddevis']:"";
    $IdProjet =isset($_POST['Idprojet'])?$_POST['Idprojet']:"";
    $Idclients=isset($_POST['Idclient'])?$_POST['Idclient']:"";
    $requete="insert into factures(datefacture,idprojets,idclients,iddevis)values(?,?,?,?)";
    $params=array($DateFacture,$IdProjet,$Idclients,$Iddevis);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
    header('location:factures.php');
?>
