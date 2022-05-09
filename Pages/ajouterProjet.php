<?php include("menu.php");?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Un Projet</title>
<link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../design.css">
  </head>
<body>
    <h2 class="text-center margintop50">Ajouter Un Projet</h2>
<div class="container col-sm-4">
<form method="POST" action="insertprojet.php" class="form">
<div class="formll">
<div >
              <label class="form-label">Nom du projet:</label>
                            <input   name="nomprojets" type="text" 
                            class="form-control"/>
</div><br>
<div >
                <label class="form-label" >date debut:</label>
                            <input  name="datedebut" type="text"  
                                   placeholder="aaaa-mm-jj"
                                   class="form-control"/>
</div><br>
  
          
<div >
              <label  class="form-label">Etat Actuel :</label>
              <select name="etatprojet" class="form-select" required>
                <option >choose...</option>
                <option >en cours</option>
                <option>terminer</option>
              </select>
              
              </div>
            </div>

          <br> </br>
          <button  class="w-100 btn btn-lg btn-primary"  type="submit">enregistrer</button>
</form>

</div>
</body>
</html>