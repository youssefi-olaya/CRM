<?php
    require_once('role.php');
    require_once("connexionBD.php");
    $login=isset($_GET['login'])?$_GET['login']:"";
    $size=isset($_GET['size'])?$_GET['size']:3;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;
    $requeteUser="select * from utilisateur where login like '%$login%'
    limit $size
    offset $offset";
   $resultatUser=$pdo->query($requeteUser);
    $requeteCount="select count(*) countUser from utilisateur";
    $resultatCount=$pdo->query($requeteCount);
    $tabCount=$resultatCount->fetch();
    $nbrUser=$tabCount['countUser'];
    $reste=$nbrUser % $size;   
    if($reste===0) 
        $nbrPage=$nbrUser/$size;   
    else
        $nbrPage=floor($nbrUser/$size)+1;  
?>

<! DOCTYPE HTML>
<HTML>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>

    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
      
    <link rel="stylesheet" href="../design.css">
    <link rel="stylesheet" href="..//icons-1.8.1/font/bootstrap-icons.css">
   

</head>
    <body>
        <?php include("menu.php"); ?>
        <div class="container mt-3">  
        <h2 class="margintop50">Listes Des Utilisateurs </h2>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>login</th> <th>Email</th> <th>Role</th> <th>Actions</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                             <?php  
                                          function mon_image(){
                                          return '<img src="../images/valide1.png" alt=""/>';
                                             }

                                                ?>
                             <?php  
                                          function image(){
                                          return '<img src="../images/invalide1.png" alt=""/>';
                                             }

                                                ?>
                            <?php while($user=$resultatUser->fetch()){ ?>
                                <tr class="<?php echo $user['etat']==1?'alert alert-success':'alert alert-danger'?>">
                                    <td><?php echo $user['login'] ?> </td>
                                    <td><?php echo $user['email'] ?> </td>
                                    <td><?php echo $user['role'] ?> </td>  
                                   <td>
                                        <a style="text-decoration:none; " href="modifierUtilisateur.php?idUser=<?php echo $user['iduser'] ?>">
                                            <img src="../images/modifier1.png" alt=""/>
                                        </a>

                                       
                                       
                                       
                                        &nbsp;&nbsp;
                                        <a style="text-decoration:none; "onclick="return confirm('Etes vous sur de vouloir supprimer cet utilisateur?')"
                                            href="supprimerUtilisateur.php?idUser=<?php echo $user['iduser'] ?>">
<!--                                                <span class="bi bi-trash-fill"></span>-->
                                            <img src="../images/sup.png" alt=""/>
                                        </a>
                                        &nbsp;&nbsp;
                                        
                <a  href="activerUtilisateur.php?idUser=<?php echo $user['iduser'] ?>&etat=<?php echo $user['etat']  ?>" >  
                                                <?php  
                                                    if($user['etat']==1)
                                                        echo mon_image();
                                                    else 
                                                        echo image();
                                                ?>
                                            </a>
                                        </td>       
                                </tr>
                             <?php } ?>
                        </tbody>
                    </table>
                <div>
                    <ul class="pagination">
                        <?php for($i=1;$i<=$nbrPage;$i++){ ?>
                            <li class="<?php if($i==$page) echo "page-item active" ?>"> 
            <a class="page-link" href="utilisateurs.php?page=<?php echo $i;?>&login=<?php echo $login ?>">
                                    <?php echo $i; ?>
                                </a> 
                             </li>
                        <?php } ?>
                    </ul>
                </div>
                </div>
        
        
        
    
    </body>
</HTML>