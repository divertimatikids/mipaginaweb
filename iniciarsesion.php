<?php
session_start();

// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia por tu usuario de la base de datos
$password = ""; // Cambia por tu contraseña de la base de datos
$dbname = "login"; // Cambia por tu nombre de base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verifica si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepara y ejecuta la consulta
    $stmt = $conn->prepare("SELECT * FROM admins WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica si hay resultados
    if ($result->num_rows == 1) {
        // Credenciales correctas
        $_SESSION['admin_logged_in'] = true;
        header('Location: BD adminis.php'); // Redirige a la página del administrador
        exit();
    } else {
        // Redirige al formulario con un mensaje de error
        header('Location: iniciarsesion.php?error=invalid');
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
