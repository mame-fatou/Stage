<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang>
	
	<head>
		<form method="get" action="inscription.php" autocomplete="off">
		
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />



	 <?php
	include 'header.php';
	?>
	</head>
	
	<body>
	
	

<style>

p{
	font-size: 30px;
	color:blue;
	
}

div{
	
	float : right;
}
body{
	font-size: 20px;
	
	
}

a:hover {background-color:red;}

</style>
		<?php
		
echo " <table class='cMonTableau'>";
if (isset($_SESSION['utilisateur'])){
          echo"Vous êtes connecté(e)s en tant que";
		  echo " ";
		  echo"<p>";
		  echo $_SESSION['utilisateur']['nom'];
		  echo " ";
	      echo $_SESSION['utilisateur']['prenom'];
		  echo "</p>";
		  
		  
		  
		  echo "Votre id est  ";
		  
		   echo"<p>";
		  echo $_SESSION['utilisateur']['id_ut'];
		  echo"</p>";
		  
		  
		  echo "Votre numéro de téléphone est le  ";
		  
		   echo"<p>";
		  echo $_SESSION['utilisateur']['num'];
		  echo"</p>";
		
		
		  echo "Votre adresse e-mail est ";
		   echo"<p>";
		  echo $_SESSION['utilisateur']['mail'];
		    echo"</p>";
			

			
	 echo"</p>";
echo " </table>";
	
	     
		  

	}

?>

		
		
		
	</body>
</html>