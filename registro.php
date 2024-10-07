<?php
// Conexión a la base de datos
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "fonda_dona_florinda";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Iniciar sesión y procesar formulario
session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function sanitizeInput($data) {
        global $conn; // Usar la conexión global
        return mysqli_real_escape_string($conn, trim($data));
    }

    $username = sanitizeInput($_POST['username']);
    $email = sanitizeInput($_POST['email']);
    
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validar que las contraseñas coincidan
    if ($password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Verificar si el correo electrónico ya está registrado
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $error = "El correo electrónico ya está registrado.";
        } else {
            // Insertar el nuevo usuario en la base de datos
            $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['flash_message'] = "Registro exitoso. Ahora puedes iniciar sesión.";
                header("Location: login.php");
                exit();
            } else {
                $error = "Error en el registro: " . $conn->error;
            }
        }
    } else {
        $error = "Las contraseñas no coinciden.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario - La Fonda de Doña Florinda</title>
    <link rel="stylesheet" href="registro.css"> <!-- Ruta al archivo CSS -->
</head>
<body>

<div class="login-container">
    <h2>Registro de usuario</h2>
    <form action="" method="POST">
        <!-- Mostrar mensaje de error si existe -->
        <?php if (isset($error)): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endif; ?>

        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required placeholder="Ingrese su nombre de usuario">

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required placeholder="ejemplo@correo.com">

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required placeholder="Crea una contraseña">

        <label for="confirm_password">Confirmar Contraseña:</label>
        <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirma tu contraseña">

        <button type="submit">Registrarse</button>
    </form>

    <div class="forgot-password">
        <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar Sesión</a></p>
    </div>
</div>

</body>
</html>