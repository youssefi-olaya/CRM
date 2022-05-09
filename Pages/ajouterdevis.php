<?php include("menu.php");?>

<link rel="stylesheet" href="..//bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../design.css">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ajouter Un Devis</title>

  </head>
<body>
<h2 class="text-center margintop50">Ajouter Un Devis</h2>

<div class="container col-sm-4">
<div class="formll">

<form method="POST" action="insertdevis.php ">
<div>
              <label class="form-label">IdClient :</label>
              <input name="idclient" type="text" class="form-control" required>
</div><br>
<div>
              <label class="form-label">IdProjet :</label>
              <input name="idprojet" type="text" class="form-control" required>
</div><br>
<div>
              <label class="form-label">Montant :</label>
              <input name="montant" type="text" class="form-control"  required>
</div>
</div>
<br>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Ajouter</button>
          </form>

</div>
  </body>
</html>
