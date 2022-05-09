<?php 
  require_once('identifier.php');
    require_once("connexionBD.php");
    $size=isset($_GET['size'])?$_GET['size']:6;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;
    $requeteProjet="select * from projets
           limit $size
           offset $offset";
    $resultatProjet=$pdo->query($requeteProjet);
$count="select count(*) countp from projets";
$resultatcount=$pdo->query($count);
$tabcount=$resultatcount->fetch();
$nbrprojet=$tabcount['countp'];
      
 $reste=$nbrprojet % $size;                   
   if($reste===0) 
       $nbrPage=$nbrprojet/$size;   
   else
      $nbrPage=floor($nbrprojet/$size)+1;  
      $offset=($page-1)*$size;
?>
    <link rel="stylesheet" href="../design.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons-1.8.1/font/bootstrap-icons.css">
</head>
<body>

<?php include("menu.php");?>
<div class="container mt-3 ">
    <h2 class="margintop50">Listes des projets</h2>
    <?php if ($_SESSION['user']['role']=='ADMIN') {?>
<a  style=" text-decoration:none ;" 
                                        href="ajouterProjet.php">
                                        <h4><span class="bi bi-plus-lg" >Ajouter un projet</span></h4>
                                            
                                    </a>
     <?php } ?>  
   
  <table class="table table-hover margintop50">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom Du Projet</th>
        <th>Date Du Début</th>
        <th>Etat Actuel</th>
           <?php if ($_SESSION['user']['role']=='ADMIN') {?>
        <th>Action</th>
            <?php } ?> 
      </tr>
    </thead>
    <tbody>
    <?php while($projet=$resultatProjet->fetch()){?>
                                <tr>
                                    <td><?php echo $projet['idprojets'] ?> </td>
                                    <td><?php echo $projet['nomprojets'] ?> </td>
                                    <td><?php echo $projet['datedebut'] ?> </td>
                                    <td><?php echo $projet['etatprojet'] ?> </td>
                                     <?php if ($_SESSION['user']['role']=='ADMIN') {?>
                                    <td >
                                   
                                     
                                        <a style="text-decoration:none; "
                                            href="modéfierProjet.php?idprojet=<?php echo $projet['idprojets'] ?>">
                                                <span class="bi bi-pencil-square"></span>
                                        </a>
                                        <a  style="text-decoration:none; "onclick="return confirm('Etes vous sur de vouloir supprimer ce projet')"
                                            href="supprimerprojet.php?idprojet=<?php echo $projet['idprojets'] ?>">
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
                               <a class="page-link" href="projets.php?page=<?php echo $i;?>">
                                    <?php echo $i; ?>
                                </a> 
                             </li>
                        <?php } ?>
                    </ul>
                </div>
    &nbsp;
    
</div>

</body>
</html>