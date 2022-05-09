<?php include("menu.php");?>

<?php 
 require_once('connexionBD.php');
 $Iddevis=isset($_GET['iddevis'])?$_GET['iddevis']:0;
 $requete="select * from devis where iddevis=$Iddevis";
 $resultat=$pdo->query($requete);
 $devis=$resultat->fetch();
 $Montant=$devis['montant'];
 $IdClient=$devis['idclients'];
 $IdProjet=$devis['idprojets'];

?>
<link rel="stylesheet" href="..//bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../design.css">

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Modéfier Un Devis</title>

  </head>
<body class="bg">
<h2 class="text-center margintop50">Modifier Un Devis</h2>
<div class="container col-sm-4">
<div class="forml">
<form method="POST" action="updatedevis.php">
<div >
              <label class="form-label">IdDevis : <?php echo $devis['iddevis'] ?></label>
              <input name="iddevis" type="hidden" class="form-control" value="<?php echo $Iddevis?>"  required>
</div><br>
<div>
              <label class="form-label">IdClient :</label>
              <input name="idclient" type="text" class="form-control" value="<?php echo $IdClient?>"required>
</div><br>
<div>
              <label class="form-label">IdProjet :</label>
              <input name="idprojet" type="text" class="form-control" value="<?php echo $IdProjet?>"required>
</div><br>
<div>
              <label class="form-label">Montant :</label>
              <input name="montant" type="text" class="form-control" value="<?php echo $Montant?>"required>
</div><br>
</div>


           <br>
           <button class="w-100 btn btn-lg btn-success" type="submit">Modifier</button>

</form>


</div>
  </body>
</html>