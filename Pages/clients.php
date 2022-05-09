
<?php 
    require_once('identifier.php');
    require_once("connexionBD.php");
    $size=isset($_GET['size'])?$_GET['size']:6;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;
    $count="select count(*) countp from clients";
    $resultatcount=$pdo->query($count);
    $tabcount=$resultatcount->fetch();
    $nbrclients=$tabcount['countp'];
      
    $reste=$nbrclients % $size;   // % operateur modulo: le reste de la division 
                                //euclidienne de $nbrFiliere par $size
    if($reste===0) //$nbrFiliere est un multiple de $size
       $nbrPage=$nbrclients/$size;   
    else
      $nbrPage=floor($nbrclients/$size)+1;  // floor : la partie entière d'un nombre décimal
      $offset=($page-1)*$size;
     $requeteClient="select idclients,nom,prenom,civilite, nomprojets  from clients c,projets p  where p.idprojets=c.idprojets order by idclients limit $size
     offset $offset";
    $resultatClient=$pdo->query($requeteClient);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons-1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../design.css">

</head>
<body class="bg">
<?php include("menu.php");?>

<div class="container mt-3 ">
  <br>
  <span><h2>Listes Des Clients</h2></span><?php include("Recherche.php");?>
  <br></br><h4>
       <?php if ($_SESSION['user']['role']=='ADMIN') {?>
      <a  style="text-decoration:none;"href="AjouterClient.php">
      <span class="bi bi-plus-lg" > ajouter un client</span>
        </a>
     <?php } ?> 
    </h4> 
  <table class="table table-hover table-light margintop50">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Civilité</th>
        <th>Nom Du Projet</th>
           <?php if ($_SESSION['user']['role']=='ADMIN') {?>
        <th>Action</th>
           <?php } ?> 
      </tr>
    </thead>
    <tbody>
    <?php while($client=$resultatClient->fetch()){?>
                                <tr>
                                    <td><?php echo $client['idclients'] ?> </td>
                                    <td><?php echo $client['nom'] ?> </td>
                                    <td><?php echo $client['prenom'] ?> </td> 
                                    <td><?php echo $client['civilite'] ?> </td> 
                                    <td><?php echo $client['nomprojets'] ?> </td>
                  <?php if ($_SESSION['user']['role']=='ADMIN') {?>
                                    <td >
                                        &nbsp;&nbsp;
                                        <a style="text-decoration:none;"
                                            href="modéfierClient.php?idclient=<?php echo $client['idclients'] ?>">
                                                <span class="bi bi-pencil-square"></span>

                                        </a>
                                        &nbsp;&nbsp;
                                        <a  style="text-decoration:none; "onclick="return confirm('Etes vous sur de vouloir supprimer cet utilisateur')"
                                            href="supprimerClient.php?idclient=<?php echo $client['idclients'] ?>">
                                                <span class="bi bi-trash-fill"></span>
                                        </a>
                                    </td>  
                                     <?php } ?> 
                                </tr>
    <?php } ?>



    </tbody>
  </table>
<div>
              <ul class="pagination ">
                        <?php for($i=1;$i<=$nbrPage;$i++){ ?>
                            <li class="<?php if($i==$page) echo "page-item active" ?>"> 
                               <a class="page-link" href="clients.php?page=<?php echo $i;?>">
                                    <?php echo $i; ?>
                                </a> 
                             </li>
                        <?php } ?>
                    </ul>
                </div>
    &nbsp;
    
</div>
</div>


</body>
</html>