<?php 
    require_once("connexionBD.php");
    $requeteFacture="select idfacture, nomprojets,nom ,montant,  datefacture from factures f,devis d ,clients c,projets p where d.iddevis=f.iddevis and p.idprojets=f.idprojets and f.idclients=c.idclients";
    $resultatFacture=$pdo->query($requeteFacture);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factures</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons-1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../design.css">

</head>
<body>
<?php include("menu.php");?>
<div class="container mt-3">
  <br>
  <h2>Listes Des Factures</h2>
  <h4><a  style="text-decoration:none;"href="Ajouterfacture.php">
      <span class="bi bi-plus-lg" > Ajouter une facture</span>
        </a></h4>  <table class="table table-hover margintop50">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom Du Client</th>
        <th>Date</th>
        <th>Montant</th>
        <th>Fichier</th>
      </tr>
    </thead>
    <tbody>
    <?php while($facture=$resultatFacture->fetch()){?>
                                <tr>
                                    <td><?php echo $facture['idfacture'] ?> </td>
                                    <td><?php echo $facture['nom'] ?> </td>
                                    <td><?php echo $facture['datefacture'] ?> </td> 
                                    <td><?php echo $facture['montant'] ?> $ </td> 
                                    <td><a href="pdf.php?idfacture=<?php echo $facture['idfacture'] ?>" style="text-decoration:none;"><span class="bi bi-box-arrow-in-down"> pdf</span></a></td>     
                                </tr>
                                <?php } ?>
    </tbody>
    </table>
     
</div>    
</body>
</html>