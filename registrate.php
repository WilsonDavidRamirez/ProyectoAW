<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $email = $_POST["email"];
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $userRecord = "$email:$firstName:$lastName:$password\n";

    if (!file_exists("users.txt")) {
        file_put_contents("users.txt", "");
    }

    if (file_put_contents("users.txt", $userRecord, FILE_APPEND)) {
        echo "Registro exitoso. ¡Ahora puedes iniciar sesión!";
    } else {
        echo "Error al registrar el usuario.";
    }
}
?>

<form method="POST" action="registrate.php">
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <input type="text" name="first_name" placeholder="Nombre" required>
    <input type="text" name="last_name" placeholder="Apellido" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit" name="register">Registrarse</button>
</form>
