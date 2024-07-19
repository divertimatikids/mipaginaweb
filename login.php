

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admicolor.css">
    <title>Inicio de Sesión - Administrador</title>
  
</head>
<body>
    <div class="login-container">
        <h2>Inicio de Sesión - Administrador</h2>
        <form action="iniciarsesion.php" method="post">
            <div class="input-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Iniciar sesión">
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
                echo '<div class="error-message">Correo o contraseña incorrectos.</div>';
            }
            ?>
        </form>
    </div>
</body>
</html>
