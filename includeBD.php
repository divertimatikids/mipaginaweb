<?php
$host = 'localhost';
$dbname = 'divertimatikids';
$username = 'root';
$password = '';

// Crear conexión
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Verificar la conexión
if (!$pdo) {
    die("Could not connect to the database $dbname");
}
?>
