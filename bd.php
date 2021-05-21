<?php
function getBD(){
$bdd =  new PDO('mysql:host=localhost;dbname=tipispirit;charset=utf8','root', 'root');
return $bdd;
}
?>