
<?php 
    require_once("connexionBD.php");
    require_once('identifier.php');
    $count="select count(*) countp from clients";
    $resultatcount=$pdo->query($count);
    $tabcount=$resultatcount->fetch();
    $nbrclients=$tabcount['countp'];

    $count="select count(*) countp from devis";
    $resultatcount=$pdo->query($count);
    $tabcount=$resultatcount->fetch();
    $nbrdevis=$tabcount['countp'];

    $count="select count(*) countp from projets";
    $resultatcount=$pdo->query($count);
    $tabcount=$resultatcount->fetch();
    $nbrprojet=$tabcount['countp'];

    $requeteCount="select count(*) countUser from utilisateur";
    $resultatCount=$pdo->query($requeteCount);
    $tabCount=$resultatCount->fetch();
    $nbrUser=$tabCount['countUser'];


    $requeteFacture="select idfacture, nomprojets,nom ,montant,  datefacture from factures f,devis d ,clients c,projets p where d.iddevis=f.iddevis and p.idprojets=f.idprojets and f.idclients=c.idclients";
    $resultatFacture=$pdo->query($requeteFacture);
    


    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Tableau De Bord</title>
</head>

<body>
   <div class="side-menu" style="height: 600px;">
        <div class="brand-name">
            <h1 style="color: white;">Bienvenue :</h1>
        </div>

		
        
        <ul>
         
             <li>
<!--
            	<a style="text-decoration: none;" class="nav-link" href="modifierUtilisataur1.php?idUser=<?php echo $_SESSION['user']['iduser'] ?>">
                    <i class="fa fa-user-circle-o"></i>
                    <div class="brand-name">
                     <h3 style="color: white;">
                    &nbsp;
                         &nbsp;
					<?php echo  ' '.$_SESSION['user']['login']?> 
                        </h3>
                     </div>
                    
				</a> 
-->
              
                    <i class="fa fa-user-circle-o"></i>
                    <div class="brand-name">
                     <h3 style="color: white;">
                    &nbsp;
                         &nbsp;
					<?php echo  ' '.$_SESSION['user']['login']?> 
                        </h3>
                     </div>
                    
				
            </li>
             <br>
        <br>
            <?php if ($_SESSION['user']['role']=='ADMIN') {?>
            <li><img src="../images/uti1.png" alt="">&nbsp;<a style="text-decoration: none;" href="utilisateurs.php"><span>Utilisateurs</span></a> </li>
             <?php } ?> 
            <br>
            <li><img src="../images/clent1.png" alt="">&nbsp;<a style="text-decoration: none;" href="clients.php"><span>Clients</span></a> </li>
            <br>
            <li><img src="../images/pr.png" alt="">&nbsp;<a style="text-decoration: none;" href="projets.php"><span>Projets</span></a> </li>
            <br>
            <li><img src="../images/de.png" alt="">&nbsp;<a style="text-decoration: none;" href="devis.php"><span>Devis</span></a> </li>
            <br>
            <li><img src="../images/fa.png" alt="">&nbsp; <a style="text-decoration: none;" href="factures.php"><span>Factures</span></a></li>
                        
                   
<br>
            <br>
            <br>
           
            	<li>

                    &nbsp;
                    &nbsp;
				<a style="text-decoration: none;" href="seDeconnecter.php">
                    <h3 style="color: white;"> Se déconnecter</h3>

                   
				</a>
			</li>
        </ul>
    </div>
    <div class="container">
    <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1 class="monstyle1"><?php echo $nbrclients ?></h1>
                        <h3 class="monstyle">Clients</h3>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="box">
                        <h1 class="monstyle1"><?php echo $nbrprojet ?></h1>
                        <h3 class="monstyle">Projets</h3>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="box">
                        <h1 class="monstyle1"><?php echo $nbrdevis ?></h1>
                        <h3 class="monstyle">Devis</h3>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="box">
                        <h1  class="monstyle1"><?php echo $nbrUser ?></h1>
                        <h3 class="monstyle">Utilisateurs</h3>
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                    </div>
                    <!-- table -->
                    <table class="table table-hover margintop50">
    <thead>
      <tr>
        <th>Nom Du Client</th>
        <th>Date</th>
        <th>Montant</th>
      </tr>
    </thead>
    <tbody>
    <?php while($facture=$resultatFacture->fetch()){?>
                                <tr>
                                    <td><?php echo $facture['nom'] ?> </td>
                                    <td><?php echo $facture['datefacture'] ?> </td> 
                                    <td><?php echo $facture['montant'] ?> $ </td> 
                                </tr>
                                <?php } ?>
    </tbody>
    </table>

        
                    <!--  -->
                        
                </div>
                <div class="client">
                    <div class="title">
                        <h2>Clients Fédèle</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                        </tr>
                        <tr>
                            <td><img src="../images/ClientM.png" alt=""></td>
                            <td>SAADAOUI MOHAMMED</td>
	
                        </tr>
                        <tr>
                            <td><img src="../images/ClientM.png" alt=""></td>
                            <td>CHAABI OMAR</td>
                        </tr>
                        <tr>
                            <td><img src="../images/ClientF.png" alt=""></td>
                            <td>SALIM RACHIDA</td>
                        </tr>
                        <tr>
                            <td><img src="../images/ClientF.png" alt=""></td>
                            <td>FAOUZI NABILA</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>