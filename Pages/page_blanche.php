<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>
<body>
<?php include("menu.php");?>
<div class="container">
<div class="container">
<h2>Ajouter Un Client</h2>
<form action="">
  <div class="mb-3 mt-3">
    <label  class="form-label">login:</label>
    <input type="text" class="form-control"  placeholder="Enter login">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" placeholder="Enter email" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Role:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Visiteur ou Admin" name="pswd">
  </div>
  <div class="mb-3">
    <label  class="form-label">Etat:</label>
    <select class="form-control" id="sel1">
    <option>0</option>
    <option>1</option>
  </select>
  </div>
  <button  class="btn btn-primary">Enregistre</button>
</form>
</div>
<div class="container">
<h2>Modéfier Un Client</h2>

<form action="">
  <div class="mb-3 mt-3">
    <label  class="form-label">login:</label>
    <input type="text" class="form-control"  placeholder="Enter login">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" placeholder="Enter email" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Role:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Visiteur ou Admin" name="pswd">
  </div>
  <div class="mb-3">
    <label  class="form-label">Etat:</label>
    <select class="form-control" id="sel1">
    <option>0</option>
    <option>1</option>
  </select>
  </div>
  <button  class="btn btn-success">Modéfier</button>
</form>
</div>

<?php 
    require_once("connexionBD.php");
    $requeteUser="select * from utilisateur";
    $resultatUser=$pdo->query($requeteUser);

?> 



<?php while($user=$resultatUser->fetch()){ ?>
                                <tr>
                                    <td><?php echo $user['login'] ?> </td>
                                    <td><?php echo $user['email'] ?> </td>
                                    <td><?php echo $user['role'] ?> </td>  
                                    
                                </tr>
                             <?php } ?>








      
</body>
</html>