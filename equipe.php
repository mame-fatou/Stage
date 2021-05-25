<?php include 'bd.php' ?>
<!DOCTYPE html>
<html lang="en">

<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />


    <title>Equipe </title>


</head>
<body>
   <h1 class="titre">Equipe </h1>  
 
 

   

  <form method="get" action="affectation.php" autocomplete="off">


 <?php


$bdd= new PDO('mysql:host=localhost;dbname=tipi;charset=utf8', 'root', 'root');
$rep = $bdd->query('select * from utilisateur');
echo "<table class= cMonTableau '>";
echo "<tr>";

echo "<th>nom et prenom : </th>";


echo "<th></th>";
echo "</tr>";
while ($line = $rep ->fetch()) {
echo "<tr>";

echo "<th><a href='affectation.php?nom=".$line["nom"]."'>".$line["nom"]." ".$line["prenom"]."</a></th>";
  

echo "</tr>";
}
echo "</table>";
$rep ->closeCursor();
?>
 
  
</body>
</html>