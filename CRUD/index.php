
<?php
include('connection.php');

$con=connection();

$sql = "SELECT * FROM datos";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
    <div class="users-form">
        <form action="insert_user.php" method="POST">
        <h1> crear usuario</h1>
        <div class="input-wrapper">
        <input type="text" name="name" placeholder="Nombre">
        <img class="input-icon" src="images/name.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="input-icon" src="images/email.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Direccion">
            <img class="input-icon" src="images/direction.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono">
            <img class="input-icon" src="images/phone.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <img class="input-icon" src="images/password.svg" alt="">

        <input type="submit" value="Agregar usuario">
</form>
        </div>

        <div class="users-table">
            <h2> usuario registrado</h2>
            <table>
             <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Contraseña</th>

</tr>
</thead>
</body>
<?php while($row = mysqli_fetch_array($query)):  ?>

<tr>
<th> <?= $row ['id']?></th>    
<th> <?= $row ['nombre']?></th>
<th> <?= $row ['email']?></th>
<th> <?= $row ['direccion']?></th>
<th> <?= $row ['telefono']?></th>
<th> <?= $row ['contraseña']?></th>

<th><a href="update.php?id=<?= $row ['id']?>" class ="users-table--edit">Editar</a></th>
<th><a href="delete_user.php?id=<?= $row ['id']?>" class ="users-table--delete">Eliminar</a></th>
</tr>
<?php endwhile; ?>
</table>
</div>
</body>
</html>