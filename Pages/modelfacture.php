<?php include("menu.php");?>

<?php 
    require_once("connexionBD.php");
    $idfacture=isset($_GET['idfacture'])?$_GET['idfacture']:0;
    $requeteFacture="select idfacture, nomprojets,nom ,montant,  datefacture from factures f,devis d ,clients c,projets p where d.iddevis=f.iddevis and p.idprojets=f.idprojets and f.idclients=c.idclients and idfacture=$idfacture";
    $resultatFacture=$pdo->query($requeteFacture);
    $facture=$resultatFacture->fetch();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
<div > 
<pre>
Nom de l entreprise
Adresse
Code Postal et Ville
Numero de telephone
Email

</pre>    
</div>
    <div>
        <h3>date : <?php echo $facture['datefacture'] ?></h3>
    </div>
    <div style="text-align: center;" >
        <h3>
            Nom Du Client : <?php echo $facture['nom'] ?>
        </h3>
    </div><br></br>
    <div >
        <table style="  border: 1px solid black;  border-collapse: collapse;
" >
        <tr>
      <th style="  border: 1px solid black;  border-collapse: collapse;
" >Description</th>
      <th style="  border: 1px solid black;  border-collapse: collapse;
">Unite</th>
      <th style="  border: 1px solid black;  border-collapse: collapse;
">Quantite</th>
      <th style="  border: 1px solid black;  border-collapse: collapse;
">Montant</th>
    </tr>
    <tr>
     <td style="  border: 1px solid black;  border-collapse: collapse;
"> Projet Facture pour notre client fedele </td>
     <td style="  border: 1px solid black;  border-collapse: collapse;
">1</td>
     <td style="  border: 1px solid black;  border-collapse: collapse;
"> 1 </td>
     <td style="  border: 1px solid black;  border-collapse: collapse;
"><?php echo $facture['montant'] ?>$ </td> 

    </tr>
        </table>
</div>
</body>
</html>