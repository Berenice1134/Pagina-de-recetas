<?php
include('connection.php');

$con=connection();

$id =  $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$direction = $_POST['direction'];
$phone = $_POST['phone'];
$password = $_POST['password'];


$sql = "UPDATE datos SET nombre='$name', email='$email', direccion='$direction', telefono='$phone', contraseña='$password'WHERE id='$id'";

            $query = mysqli_query($con, $sql);

            if(($query)){
                header("Location: index.php");
            };

?>