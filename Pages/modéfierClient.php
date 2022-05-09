<?php include("menu.php");?>

<?php 
 require_once('connexionBD.php');
 $idclient=isset($_GET['idclient'])?$_GET['idclient']:0;
 $requete="select * from clients where idclients=$idclient";
 $resultat=$pdo->query($requete);
 $client=$resultat->fetch();
 $nom=$client['nom'];
 $prenom=$client['prenom'];
 $civilite=$client['civilite'];
 $Idprojet=$client['idprojets'];

?>

<link rel="stylesheet" href="..//bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../design.css">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Modéfier un client</title>

  </head>

<body class="bg">
<h2 class="text-center margintop50">Modifier un client</h2>
<div class="container col-sm-4">
<form method="POST" action="updateClient.php">
  <div class="forml">
<div>
              <label class="form-label">IdClient : <?php echo $client['idclients'] ?></label>
              <input name="idclient" type="hidden" class="form-control" value="<?php echo $idclient?>" required>
            </div><br>
<div>
              <label class="form-label">Nom :</label>
              <input name="nom" type="text" class="form-control" value="<?php echo $nom ?>"required>
</div><br>
<div >
              <label class="form-label">Prenom :</label>
              <input name="prenom" type="text" class="form-control" value="<?php echo $prenom ?>"required>
</div><br>

            
<div >
              <label  class="form-label">civilité :</label>
              <select name="civilite" class="form-select"  required>
                <option value="">Choose...</option>
                <option <?php if($civilite=="M") echo"selected" ?>>M</option>
                <option <?php if($civilite=="F") echo"selected" ?> >F</option>
              </select>
             
</div><br>
  <div>
              <label class="form-label">Idprojet :</label>
              <input name="idprojet" type="text" class="form-control" value="<?php echo $Idprojet ?>" required>
</div>
</div>

          <br>
          <button class="w-100 btn btn-lg btn-success" type="submit">Modifier</button>
</form>
</div>

  </body>
</html>