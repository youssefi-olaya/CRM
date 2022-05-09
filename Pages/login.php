
<?php
session_start();
if (isset($_SESSION['erreurLogin']))
    $erreurLogin = $_SESSION['erreurLogin'];
else 
{
    $erreurLogin = "";
}
session_destroy();
?>
<! DOCTYPE HTML>
<HTML>
<head>
    <meta charset="utf-8">
    <title>Se connecter</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../design.css">
    <link rel="stylesheet" href="..//icons-1.8.1/font/bootstrap-icons.css">
</head>
<body class="text-center">
<div><img class="mb-4" src="../images/CRM.png"  width="200" height="200" ;>
    <h1 class="mb-3 fw-normal ">Veuillez vous connecter</h1></div>
    <div class="container col-sm-4">
            <form method="post" action="seConnecter.php" >
                <?php if (!empty($erreurLogin)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $erreurLogin ?>
                    </div>
                <?php } ?>
                <div class="forml">
    <div class="form-floating">
        <form>
      <label for="login"></label>
      <input name="login" type="text" class="form-control" autocomplete="off"  placeholder="Utilisateur">
    </div>
    <br>
    <div class="form-floating height: auto;">
      <label for="pwd"></label>
      <input name="pwd" type="password" class="form-control"  placeholder="mot de passe">
      <div style="display: flex;">
      <a style="text-decoration:none;" href="initialiserPwd.php"> <h5>mot de passe oublier?</h5></a>
      </div>
    <p class="text-right">
        <div class="checkbox mb-3">
<button class="w-100 btn btn-lg btn-primary " type="submit">Se connecter</button>

    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
    </div>
    </div>
    <p class="text-right">
                      <a  style="text-decoration:none; " href="ajouterUtilisateur.php">
                      <div style="margin: 30px;">
                     <h5> <span class="bi bi-plus-lg" > Créer un compte</span></h5>
                      </div>
                      </a>
                      

  </form>
</body>
</HTML>