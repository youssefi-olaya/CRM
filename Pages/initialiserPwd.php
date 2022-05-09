<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Initiliser votre mot de passe</title>
     <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons-1.8.1/font/bootstrap-icons.css">
 <link rel="stylesheet" href="../design.css">
</head>
<body class="text-center">
<div class="container col-md-6 col-md-offset-3">
    <br>
    <div class="panel panel-primary ">
        <h3 class="mb-3 fw-normal ">Récupérer votre mot de passe</h3>
       <div class="form-floating" >
            <form method="post" action="pwdOublie.php" >
             
              <div class="forml">
                    <label for="email" class="control-label">
                        <h5 class="mb-3 fw-normal "> Veuillez saisir votre email de récupération</h5>
                    </label>

                    <input type="email" name="email" class="form-control"/>
                </div><br>

                <button type="submit" class="w-50 btn btn-lg btn-primary ,btn btn-success">récupérer le mot de passe</button>

            </form>
        </div>
    </div>

<!--

    <div class="text-center">

        <?php

        if ($erreur == "oui") {

            echo '<div class="alert alert-danger">' . $msg . '</div>';

            header("refresh:3;url=initialiserPwd.php");

            exit();
        }
        else 
        if ($erreur == "non") {

            echo '<div class="alert alert-success">' . $msg . '</div>';

            header("refresh:3;url=login.php");

            exit();
        }

        ?>

    </div>

-->

</div>
</body>
</html>