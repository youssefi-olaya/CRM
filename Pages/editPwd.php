<?php
require_once('identifier.php');
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Changement de mot de passe</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../design.css">
    <link rel="stylesheet" href="..//icons-1.8.1/font/bootstrap-icons.css">
    <script src="../bootstrap-5.0.2-dist/js/jquery-3.3.1.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/monjs.js"></script>
</head>
<body>


    <div >
 

    <div class="container col-sm-4 margintop50">
    <h1 class="text-center">Changement de mot de passe :</h1><br>

<div class="forml">
    <center>
    
<h3 class="text-center" style="color: white;"> Compte :<?php echo $_SESSION['user']['login'] ?></h3>

<form method="POST" action="updatePwd.php">
<div >
              <label class="form-label">ancien mot de passe :</label>
              <input type="password"
                   name="oldpwd"
                   class="form-control"
                   placeholder="Taper votre Ancien Mot de passe"
                   required/>
</div><br>
<div>
              <label class="form-label">nouveau mot de passe:</label>
              <input  type="password"
                    name="newpwd"
                    class="form-control"
                    autocomplete="new-password"
                    placeholder="Taper votre Nouveau Mot de passe"
                    required>
</div><br>
</div>


           <br>
           <button class="w-100 btn btn-lg btn-success" type="submit">Modifier</button>
    </center>
</form>


</div>

</body>
</html>
