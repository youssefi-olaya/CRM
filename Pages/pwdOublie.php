<?php
require_once('connexionBD.php');

require_once('../les_fonctions/fonctions.php');

if (isset($_POST['email']))
    $email = $_POST['email'];
else
    $email = "";

$user = rechercher_user_par_email($email);

if ($user != null) {
    $id = $user['iduser'];
    $requete = $pdo->prepare("update utilisateur set pwd=MD5('0000') where iduser=$id");
    $requete->execute();


     $to =$user['email'];
    $objet = "Initialisation de  votre mot de passe";

    $content = "Votre nouveau mot de passe est 0000, veuillez le modifier à la prochéne ouverture de session";

//    $entetes = "From: Gestion Projet" . "\r\n" . "CC: projetYO2000@gamil.com";
$entetes = "From:projetYO2000@gamil.com";
    mail($to, $objet, $content, $entetes);

    $erreur = "non";

    $msg = "Un message contenant votre nouveau mot de passe a été envoyé sur votre adresse Email.";

} else {

    $erreur = "oui";

    $msg = "<strong>Erreur!</strong> L'Email est incorrecte!!!";

}

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Initiliser votre mot de passe</title>
     <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons-1.8.1/font/bootstrap-icons.css">
 <link rel="stylesheet" href="../design.css">
</head>
<body class="text-center">
<div class="container col-md-6 col-md-offset-3">
    <br>
   <div class="text-center">

        <?php

        if ($erreur == "oui") {

            echo '<div class="alert alert-danger">' . $msg . '</div>';

            header("refresh:3;url=initialiserPwd.php");

            exit();
        }
        else 
        if ($erreur == "non") {

            echo '<div class="alert alert-success">' . $msg . '</div>';

            header("refresh:3;url=login.php");

            exit();
        }

        ?>
 </div>
</div>
</body>
</html>
  
