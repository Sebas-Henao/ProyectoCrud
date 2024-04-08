<?php
include ('Connection.php');
$con = connection ();

$id_Usuario= $_POST ['id_Usuario'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Nick_name = $_POST['Nick_name'];
$Contraseña = $_POST['Contraseña'];
$Cargo = $_POST['Cargo'];
$Fecha_nacimiento = $_POST['Fecha_nacimiento'];

$sql ="UPDATE roles_operación  SET Nombre='$Nombre', Apellido='$Apellido', Nick_name='$Nick_name', Contraseña='$Contraseña', Cargo='$Cargo', Fecha_nacimiento='$Fecha_nacimiento' WHERE id_Usuario='$id_Usuario'";
$query =mysqli_query($con, $sql);

if ($query){
Header ("Location: Form.php");
};
?>