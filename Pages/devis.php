<?php 
require_once("connexionBD.php");
require_once('identifier.php');
$size=isset($_GET['size'])?$_GET['size']:6;
$page=isset($_GET['page'])?$_GET['page']:1;
$offset=($page-1)*$size;
$count="select count(*) countp from devis";
$resultatcount=$pdo->query($count);
$tabcount=$resultatcount->fetch();
$nbrdevis=$tabcount['countp'];
  
$reste=$nbrdevis % $size;   // % operateur modulo: le reste de la division 
                            //euclidienne de $nbrFiliere par $size
if($reste===0) //$nbrFiliere est un multiple de $size
   $nbrPage=$nbrdevis/$size;   
else
  $nbrPage=floor($nbrdevis/$size)+1;  // floor : la partie entière d'un nombre décimal
  $offset=($page-1)*$size;
    $requeteDevis="select iddevis,nomprojets,nom,montant from devis d,projets p,clients c where c.idclients=d.idclients and p.idprojets=d.idprojets limit $size
    offset $offset";
    $resultatDevis=$pdo->query($requeteDevis);
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devis</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons-1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../design.css">

</head>
<body>
<?php include("menu.php");?>
<div class="container mt-3">
  <br>
  <h2>Listes Des Devis</h2>
     <?php if ($_SESSION['user']['role']=='ADMIN') {?>
  <a style="text-decoration:none; "href="ajouterdevis.php">
  <h4> <span class="bi bi-plus-lg">Ajouter un devis</span></h4>
  </a>
    <?php } ?> 
  <table class="table table-hover margintop50">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom Du Client</th>
        <th>Nom Du Projet</th>
        <th>Montant</th>
           <?php if ($_SESSION['user']['role']=='ADMIN') {?>
        <th>Action</th>
        <?php } ?> 
      </tr>
    </thead>
    <tbody>
    <?php while($devis=$resultatDevis->fetch()){?>
                                <tr>
                                    <td><?php echo $devis['iddevis'] ?> </td>
                                    <td><?php echo $devis['nom'] ?> </td>
                                    <td><?php echo $devis['nomprojets'] ?> </td>
                                    <td><?php echo $devis['montant'] ?> $ </td> 
                                     <?php if ($_SESSION['user']['role']=='ADMIN') {?>
                                    <td>
                                        &nbsp;&nbsp;
                                        <a style="text-decoration:none; "
                                            href="modéfierDevis.php?iddevis=<?php echo $devis['iddevis'] ?>">
                                                <span class="bi bi-pencil-square"></span>
                                        </a>
                                        &nbsp;&nbsp;
                                        <a  style="text-decoration:none; "onclick="return confirm('Etes vous sur de vouloir supprimer ce  devis')"
                                            href="supprimerdevis.php?iddevis=<?php echo $devis['iddevis'] ?>">
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
                               <a class="page-link" href="devis.php?page=<?php echo $i;?>">
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