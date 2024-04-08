<?php
include ('Connection.php');

$con = connection ();
$sql =" SELECT * FROM roles_operación";
$query =mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="Css/Estilos.CSS">
    
</head>
<body> 
        <main>
            <form action= "insert_usuario.php" method= "POST">
                <section class="Formulario_principal">
                    <h2>Registro de personal<h2><br>
                
                    <input class="Campos" type="text-box" name= "Nombre" placeholder= "Inserte su nombre "> <br>
                    <input class="Campos" type="text-box" name= "Apellido" placeholder= " Inserte su apellido "> <br>
                    <input class="Campos" type="text-box" name= "Nick_name" placeholder= " Inserte su nombre de usuario"> <br>
                    <input class="Campos" type="password" name= "Contraseña" placeholder= "Inserte su contraseña"> <br>
                    <input class="Campos" type="text-box" name= "Cargo" placeholder= " Inserte su cargo "> <br>
                    <input class="Campos" type="text-box" name= "Fecha_nacimiento" placeholder= " Inserte fecha de nacimiento (AAAA-MMM-DD)"> <br>
                    <input class ="Botón"type="Submit" value="Registrar" >
                </section>    
            </form>
            <br>
            <br>
        </main> 
            <div class="Tabla_Usuarios">
            <section >
                <h2> Reporte de personal registrado </h2> <br>
                <table>
                    <thead>
                     <tr>
                        <th>id_Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Nick_name</th>
                        <th>Contraseña</th>
                        <th>Cargo</th>
                        <th>Fecha_nacimiento</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                            <?php while ($row =mysqli_fetch_array ($query)):?>
                            <tr>
                                <th> <?=$row['id_Usuario'] ?></th>
                                <th><?=$row['Nombre'] ?></th>
                                <th><?=$row['Apellido'] ?></th>
                                <th><?=$row['Nick_name'] ?></th>
                                <th><?=$row['Contraseña'] ?></th>
                                <th><?=$row['Cargo'] ?></th>
                                <th><?=$row['Fecha_nacimiento'] ?></th>

                                <th><a href= "Update.php? id_Usuario=<?=$row['id_Usuario'] ?>" class="botón_editar">Editar</a></th>
                                <th><a href= "Delete_User.php? id_Usuario=<?=$row['id_Usuario'] ?>" class= "botón_eliminar">Eliminar</a></th>      
                            </tr>  
                            <?php endwhile;?>               
                    </tbody>

                </table>
            </section>
            </div>
        </main>  
</body>
</html>