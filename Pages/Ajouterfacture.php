<?php include("menu.php");?>

<link rel="stylesheet" href="..//bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../design.css">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title >Ajouter Une Facture</title>

  </head>
<body>
<h2 class=" text-center margintop50">Ajouter Une Facture</h2>

  <div class="container col-sm-4">
  <form method="POST" action="insertfacture.php "> 
  <div class="formll">
<div >
              <label class="form-label">DateFacture :</label>
              <input name="Datefacture" type="text" class="form-control"  required>
</div><br>
<div >
              <label class="form-label">IdClient :</label>
              <input name="Idclient" type="text" class="form-control"  required>
</div><br>
<div >
              <label class="form-label">IdProjet :</label>
              <input name="Idprojet" type="text" class="form-control"  required>
</div><br>
<div >
              <label class="form-label">IdDevis :</label>
              <input name="Iddevis" type="text" class="form-control"  required>
</div><br>

</div>
          <br>
          <button  class="w-100 btn btn-lg btn-primary " type="submit">Ajouter</button>

 </form>

  </body>
</html>