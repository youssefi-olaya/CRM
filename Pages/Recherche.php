<?php
 require_once("connexionBD.php");
 $requeteClient="select nom  from clients";
 $resultat=$pdo->query($requeteClient);
 if(isset($_GET['s']) AND !empty($_GET['s'])){
     $recherche=htmlspecialchars($_GET['s']);
     $requete="SELECT idclients,nom,prenom,civilite, nomprojets  from clients c,projets p  where p.idprojets=c.idprojets  AND nom LIKE '%$recherche%'order by idclients ";
     $ResultatNom=$pdo->query($requete);
 }
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher Des Clients</title>
    <link rel="stylesheet" href="../design.css">
</head>
<body>
    <form method="GET" action="AfficherResultat.php">
        <input type="search" id="search" name="s" placeholder="Tapez Le Nom Du Client A Rechercher" >
        <button style="background-color: rgb(195, 196, 197); 
 border: 3px solid rgb(195, 196, 197);
  border-radius: 5px;
  height: 35px;">Chercher..</button>
    </form>
</body>
</html>