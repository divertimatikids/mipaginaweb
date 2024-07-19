<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f0f8ff;
        }
        #logout-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #logout-button:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a tu cuenta</h1>
    <!-- Botón de Cerrar Sesión -->
    <button id="logout-button">Cerrar Sesión</button>

    <script src="cerrarsesion.js"></script>
</body>
</html>



<?php
include 'funciones.php';

$id = $_GET['id'];
deleteStudent($id);
header('Location: administracion.php');
exit();
?>
