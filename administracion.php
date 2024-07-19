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
$students = getAllStudents();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divertimatikids</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilocrud.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Registro de Estudiantes</h1>
        <div class="mb-3">
            <a href="crear.php" class="btn btn-primary">Agregar Estudiante</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= htmlspecialchars($student['id']) ?></td>
                        <td><?= htmlspecialchars($student['name']) ?></td>
                        <td><?= htmlspecialchars($student['age']) ?></td>
                        <td>
                            <a href="actualizar.php?id=<?= htmlspecialchars($student['id']) ?>" class="btn btn-warning">Editar</a>
                            <a href="eliminar.php?id=<?= htmlspecialchars($student['id']) ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este estudiante?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

