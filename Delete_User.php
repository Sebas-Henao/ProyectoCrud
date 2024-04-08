<?php
include ('Connection.php');
$con = connection ();

$id_Usuario=$_GET['id_Usuario'];
$sql= "DELETE FROM roles_operación WHERE id_Usuario='$id_Usuario'";
$query =mysqli_query($con, $sql);

if ($query){
Header ("Location: Form.php");
};
?>