<?php
 session_start();
 ?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<meta charset="UTF-8">
<link rel="stylesheet" href="style/style_page.css" type="text/css" media="screen" />
<TITLE>connexion</TITLE>

</HEAD>
<body>
	<h1> connexion</h1>
<form action="connecter.php" method="GET" autocomplete="off">
<p>
Adresse email :  <input type="mail" name="mail" value=""/>
</p>
<p>
Mot de passe :  <input type="password" name="mdp1" value=""/>
</p>
<p>
<input type="submit" value="Valider">
</p>
</form>
<a href="inscription.php">si vous n'avez pas encore créer de compte veuiller cliquer ici pour vous inscrire svp </a>
</body>
</html>
