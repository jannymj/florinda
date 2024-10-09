<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'fonda_dona_florinda');

$error_message = ''; // Inicializa la variable de mensaje de error

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header('Location: inicio.php');
            exit();
        } else {
            $error_message = "Contraseña incorrecta."; // Asigna el mensaje de error
        }
    } else {
        $error_message = "No existe el usuario."; // Asigna el mensaje de error
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - La Fonda de Doña Florinda</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <!-- Barra de navegación -->
    <div class="navbar">
        <p class="navbar-title">Sabores auténticos de México en cada plato</p>
    </div>

    <!-- Contenedor de logo e iconos -->
    <div class="header-logo-icons">
        <!-- Icono de usuario en el lado izquierdo -->
        <div class="icon-container">
            <img src="images/usuario.png" alt="Icono de cuenta" class="icon-left">
        </div>
        
        <!-- Logo en el centro -->
        <img src="images/logo fdf.png" alt="Logo" class="logo">

        <!-- Iconos de búsqueda y carrito en el lado derecho -->
        <div class="icon-container">
            <img src="images/Lupa.png" alt="Icono de búsqueda" class="icon search-icon">
            <img src="images/Carro de compras.png" alt="Icono de carrito" class="icon">
        </div>
    </div>

    <!-- Formulario de inicio de sesión -->
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        
        <form action="login.php" method="POST">
            <!-- Mensaje de error -->
            <?php if (!empty($error_message)): ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php endif; ?>

            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required placeholder="Ingrese su nombre de usuario">

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required placeholder="Ingrese su contraseña">

            <button type="submit">Iniciar Sesión</button>
        </form>
        
        <!-- Botón de registro -->
        <p style="margin-top: 20px;">¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </div>

</body>
</html>
                