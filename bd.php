<?php
function getBD(){
$bdd =  new PDO('mysql:host=localhost;dbname=tipi;charset=utf8','root', 'root');
return $bdd;
}
?>