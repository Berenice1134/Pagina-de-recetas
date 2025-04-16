<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Preparar la consulta SQL para evitar inyecciones SQL
    $stmt = $conex->prepare("SELECT * FROM datos WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // Compara la contraseña ingresada con la almacenada en la base de datos
        if ($password == $user['contraseña']) {
            // Redireccionar según el correo electrónico del usuario
            if ($email == 'carlos12@gmail.com') {
                if ($password == 'assd') {
                    header("Location: http://localhost:8080/CRUD/");
                    exit(); // Asegúrate de salir después de la redirección
                }
            } else {
                header("Location: http://127.0.0.1:5501/css/index.html");
                exit(); // Asegúrate de salir después de la redirección
            }
        } else {
            echo "<h3 class='error'>Contraseña incorrecta</h3>";
        }
    } else {
        echo "<h3 class='error'>No existe el usuario</h3>";
    }
    $stmt->close();
}
?>
