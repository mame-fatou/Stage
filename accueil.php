	<?php
	include 'bd.php';
	?>

<?php
 session_start();
 ?>



<!DOCTYPE html>
<html lang>
<HEAD>			
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
 

</HEAD>
<style>
  .slider{
    width:200px;
    overflow:hidden;
    margin:150px auto;
  }
  .slides {
    width: calc(200px * 3);
    animation: glisse 5s infinite;
  }
  .slide{
    float:left;
  }
  @keyframes glisse {
    0% {
      transform: translateX(0);
    }
    10% {
      transform: translateX(0);
    }
    33% {
      transform:translateX(-200px);
    }
    43% {
      transform:translateX(-200px);
    }

	#gueye{
	background-image: url(images/voyage.jpeg);
	background-repeat : no-repeat;
	}

  }
</style>
<body >
<div class="navbar">
	<a href="accueil.php">Home</a>
	<a href="interim.php">espace interim</a>
	<a href="membre.php">espace membre</a>

	
	
	
<div class="navright">
<?php
if(!isset($_SESSION['utilisateur'])) {  ?>
<a href="inscription.php">S'inscrire </a>
<a href="connexion.php">Se connecter</a>
<?php
} else {

    echo $_SESSION["utilisateur"]['prenom'].' ';
    echo $_SESSION["utilisateur"]['nom']; 
  
 	echo'	<a href="deconnexion.php"><img src = "images/deconnexion.png" width ="50px"</a>';
	echo'	<a href="profil.php"><img src = "images/profil.png" width ="60px"</a>';
}
?>
	
	


</div>

</div>



<div class="parallax"></div>
<div class="parallax"></div>









	
	
	</body>
	
</html>