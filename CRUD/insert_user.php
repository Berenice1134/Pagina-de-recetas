<?php
include('connection.php');
$con = connection();

$id =  null;
$name = $_POST['name'];
$email = $_POST['email'];
$direction = $_POST['direction'];
$phone = $_POST['phone'];
$password = $_POST['password'];


$sql = "INSERT INTO datos (nombre, email, direccion, telefono, contraseña, fecha)
            VALUES ('$name', '$email', '$direction', '$phone', '$password', '$fecha')";

            $query = mysqli_query($con, $sql);

            if(($query)){
                header("Location: index.php");
            };

?>