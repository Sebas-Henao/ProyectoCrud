<?php
include ('Connection.php');
$con = connection ();

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Nick_name = $_POST['Nick_name'];
$Contraseña = $_POST['Contraseña'];
$Cargo = $_POST['Cargo'];
$Fecha_nacimiento = $_POST['Fecha_nacimiento'];

$sql ="INSERT INTO roles_operación (Nombre,Apellido,Nick_name,Contraseña,Cargo,Fecha_nacimiento) VALUES('$Nombre', '$Apellido','$Nick_name','$Contraseña','$Cargo','$Fecha_nacimiento')";
$query =mysqli_query($con, $sql);

if ($query){
Header ("Location: Form.php");
exit;
}else{
    echo "Error al ejecutar la consulta: "  .mysqli_error($con);
}
?>
