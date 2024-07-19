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
$student = getStudentById($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    updateStudent($id, $name, $age);
    header('Location: administracion.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilocrud.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Editar Estudiante</h1>
        <form method="post">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $student['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="age">Edad</label>
                <input type="number" class="form-control" id="age" name="age" value="<?= $student['age'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="administracion.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
