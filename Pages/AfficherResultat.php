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
 <?php include("menu.php");?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat De La Recherche</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons-1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../design.css">
</head>
<body class="bg">
<div class="container mt-3 ">
  <table class="table table-hover table-light margintop50">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Civilité</th>
        <th>Nom Du Projet</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
     while($client=$ResultatNom->fetch()){?>
                                <tr>
                                    <td><?php echo $client['idclients'] ?> </td>
                                    <td><?php echo $client['nom'] ?> </td>
                                    <td><?php echo $client['prenom'] ?> </td> 
                                    <td><?php echo $client['civilite'] ?> </td> 
                                    <td><?php echo $client['nomprojets'] ?> </td>
                                    <td >
                                        &nbsp;&nbsp;
                                        <a style="text-decoration:none;"
                                            href="modéfierClient.php?idclient=<?php echo $client['idclients'] ?>">
                                                <span class="bi bi-pencil-square"></span>

                                        </a>
                                        &nbsp;&nbsp;
                                        <a  style="text-decoration:none; "onclick="return confirm('Etes vous sur de vouloir supprimer cet utilisateur')"
                                            href="supprimerClient.php?idclient=<?php echo $client['idclients'] ?>">
                                                <span class="bi bi-trash-fill"></span>
                                        </a>
                                    </td>  
                                </tr>
                            <?php } ?>
    
    </tbody>
  </table>
    </div>
</body>
</html>