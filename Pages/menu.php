<!--
<?php
    require_once('identifier.php');
?>
-->
<link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">

	<div class="container-fluid">
	
		<div class="navbar-header">
		
			<a href="#" class="navbar-brand">NOM_ENTREPRISE</a>
			
		</div>
		
		<ul class="navbar-nav me-auto">
              <li class="nav-item"> <a  class="nav-link" href="Tableau_de_bord.php">Tableau de bord</a></li>
            &nbsp;
			 <li class="nav-item"> <a  class="nav-link" href="clients.php"> Clients</a></li>
            &nbsp;
			<li class="nav-item"> <a  class="nav-link" href="projets.php"> Projets</a></li>&nbsp;
			<li class="nav-item"> <a  class="nav-link" href="devis.php">  Devis</a></li>&nbsp;
        <li class="nav-item"> <a  class="nav-link" href="factures.php"> Factures</a></li>
			<?php if ($_SESSION['user']['role']=='ADMIN') {?>
					
				<li class="nav-item"><a class="nav-link" href="Utilisateurs.php">
                        <i class="fa fa-users"></i>
                 
                        &nbsp  Utilisteurs
                    </a>
                </li>
				
			<?php }?>
			
		</ul>
		
		
		<ul class="nav navbar-nav navbar-right">
					
			<li>
				<a class="nav-link" href="ModifierUser.php?idUser=<?php echo $_SESSION['user']['iduser'] ?>">
                    <i class="fa fa-user-circle-o"></i>
                    
                     <img src="../images/user4.png" alt="">
					<?php echo  ' '.$_SESSION['user']['login']?>
				</a> 
			</li>
			&nbsp;&nbsp;
			<li>
				<a class="nav-link" href="seDeconnecter.php">
                    <i class="fa fa-sign-out"></i>
                    <img src="../images/deconnecter4.png" alt=""> 
					&nbsp Se déconnecter
				</a>
			</li>
							
		</ul>
		
	</div>
</nav>