<?php
function Connection(){
$host ="localhost";
$user ="root";
$pass ="Sebash310";
$bd ="registro_personal";

$connect =mysqli_connect($host, $user, $pass);
mysqli_select_db($connect, $bd);
return $connect;
};
?>       