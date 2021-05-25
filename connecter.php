<?php
 session_start();
 ?>

   <!DOCTYPE HTML>
  <HTML>
  <head>
  <TITLE>page connecter</TITLE>
  <?php
  
  if($_GET['mail']== "" or $_GET['mdp1']== "" ){
    echo'<meta http-equiv="refresh" content="0; url=connexion.php">';
	
  }
  
  

  else{
	    
  $bdd = new PDO('mysql:host=localhost;dbname=tipi;charset=utf8', 'root', 'root');
		$query = "select * from utilisateur where mail='".$_GET ['mail']."' && mdp='".$_GET['mdp1']."'";


		$rep = $bdd->query($query);
		$ligne = $rep ->fetch();

      $_SESSION['utilisateur']=array($ligne['nom'],$ligne['prenom'],$ligne['adresse'],$ligne['num'],$ligne['mail']);
      echo '<meta http-equiv="Refresh" content="0;url=accueil.php">';


  }
  ?>
  </head>
  <body>
 </HTML>