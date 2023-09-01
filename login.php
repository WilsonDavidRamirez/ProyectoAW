<?php
// Configurar el tiempo de vida de la sesión en segundos (30 minutos)
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

$session_duration = 30 * 60; // 30 minutos en segundos

// Iniciar sesión con la configuración de tiempo de vida
session_set_cookie_params($session_duration);
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $lines = file("users.txt", FILE_IGNORE_NEW_LINES);

    foreach ($lines as $line) {
        list($storedEmail, $firstName, $lastName, $hashedPassword) = explode(":", $line);
        if ($email === $storedEmail && password_verify($password, $hashedPassword)) {
            $_SESSION["email"] = $email;
            $_SESSION["first_name"] = $firstName;
            $_SESSION["last_name"] = $lastName;

            header("Location: home.php");
            exit;
        }
    }
    $loginError = "<span class='error-message'>Usuario o contraseña incorrecta</span>";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="./css/main.css">
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap");

    .wrapper2 {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: var(--clr-main);
        font-family: "Rubik", sans-serif;
    }

    .error-message {
        color: red;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="wrapper2">
        <aside> </aside>
        <main>
            <h1 class="titulo-principal text-center">Stock X</h1>
            <form method="POST" action="login.php" class="formulario-login">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" id="email"
                        placeholder="Ingrese su correo electrónico" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Ingrese su contraseña" required>
                </div>
                <center>
                    <button type="submit" name="login" class="producto-agregar boton-login">Iniciar sesión</button>
                </center>
            </form>

            <center><a href="registrate.php" class="btn producto-agregar">Registrarse</a></center>
            <?php
            if (isset($loginError)) {
                echo "<p class='error'>$loginError</p>";
            }
            ?>
        </main>
    </div>
</body>

</html>


<?php
if (isset($loginError)) {
    echo "<p>$loginError</p>";
}
?>

<script>
<?php if (isset($loginError)): ?>
$(document).ready(function() {
    $('#errorModal').modal('show');
    $('.error-message').css('color', 'red');
});
<?php endif; ?>
</script>