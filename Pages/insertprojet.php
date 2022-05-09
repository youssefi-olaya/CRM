<?php
    require_once('connexionBD.php');
    $Nomprojets=isset($_POST['nomprojets'])?$_POST['nomprojets']:"";
    $Datedebut=isset($_POST['datedebut'])?$_POST['datedebut']:"";
    $Etatprojet=isset($_POST['etatprojet'])?$_POST['etatprojet']:"";
    $requete="insert into projets(idprojets,nomprojets,datedebut,etatprojet) values(?,?,?,?)";
    $params=array($Idprojet,$Nomprojets,$Datedebut,$Etatprojet);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
    header('location:projets.php');
?>
