<?php
include ('Connection.php');
$con = connection ();

$id_Usuario=$_GET['id_Usuario'];

$sql = "SELECT * FROM roles_operación WHERE id_Usuario= '$id_Usuario'";
$query =mysqli_query($con, $sql);
$row=mysqli_fetch_array ($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar_Usuario</title>
     <link rel="stylesheet" href="Css/Estilos.CSS">
</head>
<body>
    <div class="Formulario_principal">
        <form action= "Edit_User.php" method="POST">
            <h2> Editar un usuario</h2><br>
                    <input class="Campos" type="hidden" name= "id_Usuario" value= "<?=$row['id_Usuario']?>"> <br>
                    <input class="Campos" type="text-box" name= "Nombre" placeholder= "Inserte su nombre " value= "<?=$row['Nombre']?>"> <br>
                    <input class="Campos" type="text-box" name= "Apellido" placeholder= " Inserte su apellido " value= "<?=$row['Apellido']?>"> <br>
                    <input class="Campos" type="text-box" name= "Nick_name" placeholder= " Inserte su nombre de usuario" value= "<?=$row['Nick_name']?>"> <br>
                    <input class="Campos" type="password" name= "Contraseña" placeholder= "Inserte su contraseña" value= "<?=$row['Contraseña']?>"> <br>
                    <input class="Campos" type="text-box" name= "Cargo" placeholder= " Inserte su cargo " value= "<?=$row['Cargo']?>"> <br>
                    <input class="Campos" type="text-box" name= "Fecha_nacimiento" placeholder= " Inserte fecha de nacimiento (AAAA-MMM-DD)" value= "<?=$row['Fecha_nacimiento']?>"> <br>
                    <input class ="Botón"type="Submit" value="Actualizar información" >
        </form>
    </div>
    
</body>
</html>