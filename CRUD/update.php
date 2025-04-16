<?php
include('connection.php');
$con = connection();
$id=$_GET['id'];

$sql = "SELECT * FROM datos WHERE id = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Usuario</title>
</head>
<body>
    
<div class="users-form">
        <form action="edit_user.php" method="POST">
        <h1> Editar usuario</h1>

        <input type="hidden" name="id" value="<?= $row ['id'] ?>">

     
        <input type="text" name="name" placeholder="Nombre" value="<?= $row ['nombre'] ?>">
    
         <input type="email" name="email" placeholder="Email" value="<?= $row ['email'] ?>">
         
            <input type="text" name="direction" placeholder="Direccion" value="<?= $row ['direccion'] ?>">


            <input type="tel" name="phone" placeholder="Telefono" value="<?= $row ['telefono'] ?>">



            <input type="password" name="password" placeholder="Contraseña" value="<?= $row ['contraseña'] ?>">


        <input type="submit" value="Actualizar informacion">
</form>
</body>
</html>