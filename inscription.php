<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

  <title>Inscription</title>

</head>
	<body>
		<h1> Inscription</h1>



			<form action="enregistrement.php" method="POST" autocomplete="off">

                 <p><input type="text" name="nom"  value= "<?php if(isset($_GET['nom'])) echo $_GET['nom']; ?>" placeholder="Nom"/></p>
                       
                 <p><input type="text" name="prenom"  value= "<?php if(isset($_GET['prenom'])) echo $_GET['prenom']; ?>" placeholder="Prenom"/></p>
                        
                 <p><input type="text" name="username"  value= "<?php if(isset($_GET['username'])) echo $_GET['username']; ?>" placeholder="Username"/></p>
                       
                 <p><input type="text" name="num"   value= "<?php if(isset($_GET['num'])) echo $_GET['num']; ?>" placeholder="number"/></p>
                       
                 <p><input type="text" name="adresse"  value= "<?php if(isset($_GET['adresse'])) echo $_GET['adresse']; ?>" placeholder="Adresse"/></p>
                       
                 <p><input type="text" name="email" value= "<?php if(isset($_GET['email'])) echo $_GET['email']; ?>" placeholder="email"/></p>
				 
				 <p><input type="text" name="num_id" value= "<?php if(isset($_GET['num_id'])) echo $_GET['num_id']; ?>" placeholder="numéro carte d'identité"/></p>
							
				<p>	pièce d'identité</p>
				
				<p><input type="file" name="photo_id"  value= "<?php if(isset($_GET['photo_id'])) echo $_GET['photo_id']; ?>" placeholder="photo carte d'identité"/></p>
				<p><input type="text" name="carte_vitale" value= "<?php if(isset($_GET['carte_vitale'])) echo $_GET['carte_vitale']; ?>" placeholder="numéro de la carte vitale"/></p>
				

				
				

			
				<p>disposez-vous d'un permis de conduire ?</p>
                 <SELECT name="permis?">
					<OPTION> </OPTION>
					<OPTION>OUI</OPTION>
					<OPTION>NON</OPTION>
				</SELECT></p>   
				
				<p>	photo_permis</p>
				
				<p><input type="file" name="photo_permis" id="photo_permis" /> </p>

				<p>Etes-vous véhiculé  ?</p>
				 <SELECT name="vehicule?">
				 
					<OPTION> </OPTION>
					<OPTION>OUI</OPTION>
					<OPTION>NON</OPTION>
				
				</SELECT></p>
				
				<p>date de début de disponibilité</p>
				 <p><input type="date" name="disponible_debut" value= "<?php if(isset($_GET['disponible_debut'])) echo $_GET['disponible_debut']; ?>" placeholder="disponible_debut"/></p>
							
				
				<p>date de fin de disponibilité</p>
				 <p><input type="date" name="disponible_fin" value= "<?php if(isset($_GET['disponible_fin'])) echo $_GET['disponible_fin']; ?>" placeholder="disponible_fin"/></p>
							
				

                 <p><input type="password" name="mdp1" value="" placeholder="Password"/></p>
                        
                 <p><input type="password" name="mdp2"  value="" placeholder="Confirm"/></p>
				 
				 

             
                 <p><input type="submit" value="S'inscrire" /></p>
				 



            </form>



</form>



</body>
</html>
