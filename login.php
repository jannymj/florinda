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
        $error_message = "No existe el usuario.";
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
    <link rel="stylesheet" href="login_registro.css">
</head>
<body>

    <div class="navbar">
        <div class="header-logo-icons">
            <img src="images/logo fdf.png" alt="Logo" class="logo">
            <div class="menu-options">
                <div class="dropdown">
                    <a href="#">Menú</a>
                    <div class="dropdown-content">
                        <a href="#">Desayunos</a>
                        <a href="#">Comida y Cena</a>
                        <a href="#">Bebidas</a>
                        <a href="#">Postres</a>
                    </div>
                </div>
                <a href="#">Nosotros</a>
                <a href="#">Sucursales</a>
                <a href="#">Contáctanos</a>
            </div>
            <div class="icon-container">
    <a href="registro.php">
        <img src="images/usuario.png" alt="Icono de cuenta" class="icon-left">
    </a> 
    
</div>

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

   
    <div class="footer">
        <div class="footer-content">
            <div class="logo-container">
                <img src="images/logo fdf.png" alt="Logo" class="footer-logo">
            </div>
            <div class="mission-vision">
                <p><strong>Misión:</strong> Ofrecer comida de calidad que haga sentir a nuestros clientes como en casa.</p>
                <p><strong>Visión:</strong> Ser la fonda preferida por las familias para disfrutar de un buen alimento.</p>
            </div>
            <p class="slogan">¡Disfruta de la verdadera comida mexicana!</p>
        </div>
    </div>

</body>
</html>
