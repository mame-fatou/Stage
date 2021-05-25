<!DOCTYPE HTML>
<html>
<head>
  <title>Nouveau</title>
</head>
<body>
  <h2> Page Formulaire</h2>

<form
action="enregistrement.php" method="post" autocomplete="off">
<p>
Nom :
<input type="text" name="n" value="<?php if(isset($_GET['n'])) echo $_GET['n']; ?>"/> </p>
<p>
Prénom :
<input type="text" name="p" value="<?php if(isset($_GET['p'])) echo $_GET['p']; ?>"/> </p>
<p>
<p>
Adresse :  <input type="num" name="adr" value="<?php if(isset($_GET['adr'])) echo $_GET['adr'];?>"/>
</p>
<p>
Numero de telephone :  <input type="num" name="num" value="<?php if(isset($_GET['num'])) echo $_GET['num']; ?>"/>
</p>  
Adresse e-mail:
<input type="text" name="mail" value="<?php if(isset($_GET['mail'])) echo $_GET['mail']; ?>"/> </p>
<p>
Mot de passe :
<input type="password" name="mdp1" value=""/> </p>
<p>
Confirmer votre mot de passe:
<input type="password" name="mdp2" value=""/></p>
<p>
<input type="submit" value="Envoyer">
</p>
</form>





       </body>
   </html>
