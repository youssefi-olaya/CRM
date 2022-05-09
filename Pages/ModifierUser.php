<?php include("menu.php");?>

<?php
    require_once('identifier.php');
    require_once('connexionBD.php');

    $id=isset($_GET['idUser'])?$_GET['idUser']:0;

    $requete="select * from utilisateur where iduser=$id";

    $resultat=$pdo->query($requete);
    $utilisateur=$resultat->fetch();
    $login=$utilisateur['login'];
    $email=$utilisateur['email'];
    $role=strtolower ($utilisateur['role']);
?>
<! DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>modifier d'un utilisateur</title>
        <link rel="stylesheet" href="..//bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../design.css">
    </head>
    <body >
        
                       
        <h2 class="text-center margintop50">Modifier Un Utilisateur</h2>
        <div class="container col-sm-4 ">
                  <form method="post" action="updateUtilisateur.php" class="form">
                    <div class="forml">
						<div >
                         
                            <input type="hidden" name="iduser" class="form-control" value="<?php echo $id ?>"/>
                        </div><br>
                        <div >
                             <label class="form-label" for="login">Login :</label>
                            <input type="text" name="login" placeholder="Login" class="form-control" value="<?php echo $login ?>"/>
                        </div><br>
                        <div >
                             <label class="form-label" for="email">Email :</label>
                            <input type="email" name="email" placeholder="email" class="form-control"
                                   value="<?php echo $email ?>"/>
                        </div><br>
                        
                        <div >
              <label  class="form-label">Role  :  <?php echo $utilisateur['role'] ?></label>    
              <input name="role" type="hidden" class="form-control" value="<?php echo $role?>" required>

                        </div>
                    </div><br>
<button class="w-100 btn btn-lg btn-success" type="submit">Modifier</button>

                        <a style="text-decoration: none;" href="editPwd.php?idUser=<?php echo $utilisateur['iduser'] ?>">Changer le mot de passe</a>
					</form>
    </body>
</HTML>