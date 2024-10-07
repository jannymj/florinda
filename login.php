<?php
session_start();
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'fonda_dona_florinda');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar que el usuario existe
    $sql = "SELECT * FROM usuarios WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $username = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($password, $username['password'])) {
            $_SESSION['username'] = $username['username'];  // Guardamos el nombre de usuario en sesión
            header('Location: catalogo.php'); // Redirigir al catálogo
            exit();
        } else {
            echo "<p class='error-message'>Contraseña incorrecta.</p>";
        }
    } else {
        echo "<p class='error-message'>No existe el usuario.</p>";
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
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="POST">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required placeholder="Ingrese su nombre de usuario">

            <label for="password">Contraseña:</label>
            <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirma tu contraseña">

            <button type="submit">Iniciar Sesión</button>
        </form>
    
    </div>
</body>
</html>

