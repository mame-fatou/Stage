
<html>
    <head>
        <title>page d'enregistrement</title>
   	<?php
include('bd.php');
function enregister($n,$p,$adr,$num,$mail,$mdp){
	
	$bdd = getBD();
	
	$rep=$bdd-> query("INSERT INTO utilisateur(nom,prenom,adresse,numero,mail,mdp) VALUES ('".$n."','".$p."','".$adr."','".$num."','".$mail."','".$mdp."')");
}
// 



					
   	if(($_POST['mdp1']!=$_POST['mdp2']) || ($_POST['mdp1']=="") || ($_POST['n']=="") || ($_POST['p']=="") || ($_POST['adr']=="") || ($_POST['num']=="") || ($_POST['mail']=="")){
			echo "Informations manquante veuillez saisir les bonnes informations merci  ";
			echo '<meta http-equiv="Refresh" content="3; inscription.php?n='.$_POST['n'].'&p='.$_POST['p'].
            '&adr='.$_POST['adr'].'&num='.$_POST['num'].'&mail='.$_POST['mail'].'"/>';

    }
	
	
	
	
	
    else {
			echo "La création de compte a reussi, vous serez redigé à notre page";
			enregister ($_POST['n'],$_POST['p'],$_POST['adr'],$_POST['num'],$_POST['mail'],$_POST['mdp1']);
			echo '<meta http-equiv="Refresh" content="5; connexion.php"/>';
    }




        ?>


</head>
<body>
Veuillez parientez svp...

</body>
</html>
