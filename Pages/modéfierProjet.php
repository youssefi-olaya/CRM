<?php include("menu.php");?>

<?php
require_once('connexionBD.php');
 $Idprojet=isset($_GET['idprojet'])?$_GET['idprojet']:0;
 $requete="select * from projets where idprojets=$Idprojet";
 $resultat=$pdo->query($requete);
 $projet=$resultat->fetch();
 $NomProjet=$projet['nomprojets'];
 $DateDebut=$projet['datedebut'];
 $EtatProjet=$projet['etatprojet'];
 
?>
<link rel="stylesheet" href="..//bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../design.css">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Modéfier Un Projet</title>

  </head>
<body class="bg">
<h2 class="text-center margintop50">Modifier Un Projet</h2>
<div class="container col-sm-4" >
<form  method="POST" action="updateprojet.php">
  <div class="forml">
<div >
  <group>
    <label class="form-label">IdProjet:<?php echo $projet['idprojets']?></label>
    <input name="idprojet" type="hidden" class="form-control" value="<?php echo $Idprojet?>">
  </group><br>
              
</div>
<div >
              <label class="form-label">Nom du Projet :</label>
              <input name="nomprojet" type="text" class="form-control" value="<?php echo $NomProjet?>" required>
</div><br>
<div >
              <label class="form-label">Date Debut :</label>
              <input name="datedebut" type="text" class="form-control" placeholder="jj/mm/aaaa" value="<?php echo  $DateDebut ?>" required>
</div><br>
  
            
<div >
              <label  class="form-label">Etat Actuel :</label>
              <select name="etatprojet" class="form-select"  required>
                <option >Choose...</option>
                <option value="en Cours.."<?php if($EtatProjet=="en Cours..") echo"selected" ?>>en cours ..</option>
                <option value="terminer"<?php if($EtatProjet=="terminer") echo"selected" ?>>terminer</option>
              </select>
</div><br>
</div>
           <br></br>
          <button class="w-100 btn btn-lg btn-success" type="submit">Modifier</button>
</form>


</div>
  </body>
</html>