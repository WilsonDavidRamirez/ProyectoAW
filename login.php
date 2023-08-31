<?php
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

            // Crear una cookie con el mensaje de bienvenida
            $mensaje = "Bienvenido, " . $_SESSION["email"];
            setcookie("welcome_message", $mensaje, time() + 60, "/"); // Cookie válida por 1 minuto

            header("Location: home.html");
            exit;
        }
    }

    $loginError = "Credenciales incorrectas";
}
?>

<form method="POST" action="login.php">
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit" name="login">Iniciar sesión</button>
</form>

<a href="registrate.php">Registrarse</a>

<?php
if (isset($loginError)) {
    echo "<p>$loginError</p>";
}
?>
