<?php include("menu.php");?>


<link rel="stylesheet" href="..//bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../design.css">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title >Ajouter Un Client</title>

  </head>
<body>
<h2 class=" text-center margintop50  ">Ajouter Un Client</h2>

  <div class="container col-sm-4">
<form method="POST" action="insertClient.php "> 
  <div class="formll">
<div >
              <label class="form-label">Nom :</label>
              <input name="nom" type="text" class="form-control"  required>
</div><br>
<div >
              <label class="form-label">Prenom :</label>
              <input name="prenom" type="text" class="form-control"  required>
</div><br>

            
<div>
              <label  class="form-label">civilité :</label>
              <select name="civilite" class="form-select"  required>
                <option >Choose...</option>
                <option>M</option>
                <option>F</option>
              </select>
</div><br>
<div>
              <label class="form-label">Idprojet :</label>
              <input name="idprojet" type="text" class="form-control"  required>
</div><br>
</div>

          <br>
          <button  class="w-100 btn btn-lg btn-primary " type="submit">Ajouter</button>
</form>

</div>
  </body>
</html>































