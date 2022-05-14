# <img src="/images/CRM2.png" alt=" "> Application de gestion des relations clientèles(CRM)

***sommaire :*** 

[**1) Interface d'authentification.** ](#id1)  
 [&nbsp; &nbsp; &nbsp;•&nbsp; Interface "mot de passe oublier?"  ](#id2)   
 [&nbsp; &nbsp; &nbsp;•&nbsp; Interface "créer un compte"  ](#id3)  
 
 [**2) Interface "Tableau de bord"**  ](#id4)
 
 [**3) Interface "Utilisateurs"**  ](#id5)  
  [     &nbsp; &nbsp; &nbsp;•&nbsp; Interface "Modifier Un Utilisateur"  ](#id6)  
   [    &nbsp; &nbsp; &nbsp;•&nbsp; Interface "Changer le mot de passe"  ](#id7)  
       
 [**4) Interface "client"**  ](#id8)  
  [    &nbsp; &nbsp; &nbsp;•&nbsp; Interface "Modifier un client"  ](#id9)  
  [    &nbsp; &nbsp; &nbsp;•&nbsp; Interface "Ajouter Un Client"  ](#id10)  
      
 [**5) Interface "Projet"**  ](#id11)  
 [     &nbsp; &nbsp; &nbsp;•&nbsp; Interface "Modifier Un Projet"   ](#id12)  
 [     &nbsp; &nbsp; &nbsp;•&nbsp; Interface "Ajouter Un Projet"  ](#id13)  
      
[**8) Interface "Facture"**  ](#i14)  
 [     &nbsp; &nbsp; &nbsp;•&nbsp; Interface "Ajouter Une Facture" ](#id15)  
      
 [**9) Interface "Devis"**  ](#id16)  
   [ &nbsp; &nbsp; &nbsp;•&nbsp; Interface "Modifier Un Devis" ](#id17)  
   [   &nbsp; &nbsp; &nbsp;•&nbsp; Interface "Ajouter Un Devis"  ](#id18)  
      <div id='id1'/>  
**************************************************************************************************   
### &nbsp; &nbsp; &nbsp; ***1) Interface d'authentification.***  
<img src="/images/user2.png" alt=" "> 

Cette interface est la toute première interface dans notre application et elle est subdivisée en trois parties :  

•&nbsp;***La 1ère partie :***   pour faire l’authentification et elle contient deux champs de textes 1 et 2 pour faire entrer l’identifiant et le mot de passe et un bouton “Se connecter” qui permet d’aller vers la page d'accueil si les données sont correctes.  
Si les données fournies sont incorrectes l’utilisateur va être redirigé vers la même page avec un message **"Erreur!! Login ou mot de passe incorrecte!!! ".**   
     <div id='id2'/>
     
     
•&nbsp;***La 2ème partie :*** c'est un lien qui nous mène a la page **"mot de passe oublier?".**    
 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<img src="/images/1.png" alt=" ">  
 
  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Ici il faut taper l'email et on va avoir une des deux resultat:  
   &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;- Soit la phrase **"Erreur! L'Email est incorrecte!!!"**  
    &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;- soit la phrase **"Un message contenant votre nouveau mot de passe a été envoyé sur votre adresse Email."**  
     <div id='id3'/>  
     
     
•&nbsp;***La 3ème partie :*** c'est un lien qui nous mène a la page **"créer un compte".**  
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<img src="/images/1.png" alt=" ">  
 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Il faut remplir ici les champs suivants pour ajouter un nouveau utilisateur (nom utilisateur,mot de passe,confirmer mot de passe,email)
        <div id='id4'/>  
**************************************************************************************************   
### &nbsp; &nbsp; &nbsp; ***2) Interface "Tableau de bord"***   
 Dans cette page il y a 4 partie :  
 
 - **1ere partie :** c'est le menu qui contient le nom des interfaces aisi que le nom d'urilisateur selon le cas:  
   - un admin : Il peut acceder à la liste des utilisateurs et il a le droit de faire les modifications,suppressions et ajouts.   
   - <img src="/images/1.png" alt=" ">  
   - un visiteur : Il ne peut pas acceder à la liste des utilisateurs et il n'a pas le droit de faire les modifications,suppressions et ajouts.  
   - <img src="/images/1.png" alt=" ">  
 
 
 - **2ème partie :** Il contient l'ensemble des nombres d'elements de chaque interface.   
 
 - **3ème partie :**  Il contient la liste des Recent Payments.   

 - **4ème partie :** Il contient la liste des Clients Fédèle. 
        <div id='id5'/>  
**************************************************************************************************   
### &nbsp; &nbsp; &nbsp; ***3) Interface "Utilisateurs"***   
<img src="/images/1.png" alt=" ">  

Il y a trois options dans cette page : 
- **supression**  

- **activer/desactiver**  
        <div id='id6'/>  
        
- **modifier un utilisateur**   
- <img src="/images/1.png" alt=" ">   
 On peut modifier 4 champs:  
     - login  
     - email  
     - role  
     <div id='id7'/>
     
     - **mot de passe**  
     - <img src="/images/1.png" alt=" ">
     
     aprés avoir changer le mot de passe il y a deux resultats possible:  
     * "Erreur! ancien mot de passe est incorrect !!!! "  
     *  "Félicitation! Votre mot de passe est modifié avec succés "   
        <div id='id8'/>  
**************************************************************************************************    
### &nbsp; &nbsp; &nbsp; ***4) Interface "Client"***  
<img src="/images/1.png" alt=" ">   

Il y a trois options dans cette page :  
- **supression**  
        <div id='id9'/>
        
- **ajouer un client :**    
        <img src="/images/1.png" alt=" ">  
        <div id='id10'/>
        
- **modifier un client**     
         <img src="/images/1.png" alt=" ">   
        <div id='id11'/>  
**************************************************************************************************   
### &nbsp; &nbsp; &nbsp; ***5) Interface "Projet"***  
<img src="/images/1.png" alt=" ">   

Il y a trois options dans cette page :  
- **supression**  
        <div id='id12'/> 
        
- **ajouer un projet :**    
        <img src="/images/1.png" alt=" ">  
         <div id='id13'/>
         
- **modifier un client**    
         <img src="/images/1.png" alt=" ">   
        <div id='id14'/>  
**************************************************************************************************   
### &nbsp; &nbsp; &nbsp; ***5) Interface "facture"***  
<img src="/images/1.png" alt=" "> 

Il y a deux options dans cette page :  
- telechargement de la facture sous format pdf.   
        <div id='id15'/>  
- **ajouter une facture**  
        <img src="/images/1.png" alt=" ">   
        <div id='id16'/>  
**************************************************************************************************   
### &nbsp; &nbsp; &nbsp; ***9) Interface "Devis"***  
<img src="/images/1.png" alt=" ">  


Il y a trois options dans cette page :  
- **supression**  
        <div id='id17'/> 
        
- **ajouer un devis :**    
        <img src="/images/1.png" alt=" ">  
         <div id='id18'/>
         
- **modifier un devis**    
         <img src="/images/1.png" alt=" ">   
****************************************************************************************************
 # fin
