    <!DOCTYPE html>
        <html>
            <head>
                <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

            </head>
            <body>

                <?php

					include('bd.php'); 
					
                     function enregistrer($username,$nom,$prenom,$num,$adresse,$email,$disponible_debut,$disponible_fin,$permis,$vehicule,$num_id,$photo_id,$photo_permis,$carte_vitale,$mdp1){
                    	
                    	
							$bdd = getBD();
							$rep1=$bdd->query("INSERT INTO ulilisateur(username,nom,prenom,adresse,num,email,disponible_debut,disponible_fin,permis,vehicule,num_id,photo_id,photo_permis,carte_vitale,mdp1) VALUES ('".$username."','".$nom."','".$prenom."','".$num."','".$adresse."','".$email."','".$disponible_debut."','".$disponible_fin."','".$permis."','".$vehicule."','".$num_id."','".$photo_id."','".$photo_permis."','".$carte_vitale."','".$mdp1."')"); 
                    	
                    }
					
					
					$bdd = getBD();
					$rep=$bdd->query("SELECT username from utilisateur "); 
					
					$telephone=$_POST['num'];
					$x=strlen($telephone);
					if($x != 10){
						    $erreur="Numéro de téléphone invalide!";
							echo"$erreur</br>";
							echo"</br>";
						  	echo '<meta http-equiv="Refresh" content="3;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$_POST ['username'].'&num='.$_POST ['num'].'&adresse='.$_POST['adresse'].'&email='.$_POST ['email'].'&e='.$erreur.'">';
					}
					
					
					
					while($ligne=$rep->fetch()){
						if($ligne['username']==$_POST['username']){
							$erreur="Ce username existe déjà.";
							echo"$erreur</br>";
							echo"</br>";
							echo '<meta http-equiv="Refresh" content="3;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$username.'&num='.$_POST ['num'].'&adresse='.$_POST['adresse'].'&email='.$_POST ['email'].'&e='.$erreur.'">';
						}
					}
                   
					$email=$_POST['email'];
					$i=0;
					$bool=FALSE;
					while($i<strlen($email) && !$bool){
						if($email[$i]=="@"){
							$bool=TRUE;
						}
						$i++;
					}
					if(!$bool && $_POST ['email'] != ""){
						  $erreur="email invalide!";
						  echo"$erreur</br>";
						  echo"</br>";
						  echo '<meta http-equiv="Refresh" content="3;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$_POST ['username'].'&num='.$_POST ['num'].'&adresse='.$_POST['adresse'].'&email='.$_POST ['email'].'&e='.$erreur.'">';		
					}
					else if(($_POST['nom'] == "")||
                    ($_POST['prenom'] == "") ||
					($_POST['username'] == "") ||
                    ($_POST ['num'] == "") ||
                    ($_POST ['adresse'] == "") ||
                    ($_POST ['email'] == "") ||
					($_POST['mdp1']=="") || 
					($_POST['mdp2']=="") ||
					($_POST['num_id']=="")||
					($_POST['carte_vitale']=="")
					
					
					 {
						$erreur="informations manquantes veuillez remplir toutes les cages!";
						echo"$erreur</br>";
						echo"</br>";
                    	echo '<meta http-equiv="Refresh" content="5;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$_POST ['username'].'&num='.$_POST ['num'].'&adresse='.$_POST['adresse'].'&email='.$_POST ['email'].'&e='.$erreur.'">';
					}
					else if( ($_POST ['mdp1'] != $_POST['mdp2'])){
							$erreur="Veuillez saisir deux mots de passes identiques";
							echo"$erreur</br>";
                    	    echo '<meta http-equiv="Refresh" content="3;inscription.php?nom='.$_POST['nom'].'&prenom='.$_POST ['prenom'].'&username='.$_POST ['username'].'&num='.$_POST ['num'].'&adresse='.$_POST['adresse'].'&email='.$_POST ['email'].'&e='.$erreur.'">';

					}
	
                    else{
                      enregistrer($_POST['username'],$_POST['nom'],$_POST['prenom'],$_POST['num'],$_POST['adresse'],$_POST['email'],$_POST['mdp1']);
                    	echo '<meta http-equiv="Refresh" content="2;url=connexion.php">';
						
                    }
                   ?>

        </body>
    </html>
