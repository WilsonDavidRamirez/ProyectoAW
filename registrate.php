<?php
$registrationMessage = ""; // Inicializa el mensaje de registro

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $email = $_POST["email"];
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $userRecord = "$email:$firstName:$lastName:$password\n";

    if (!file_exists("users.txt")) {
        file_put_contents("users.txt", "");
    }

    $lines = file("users.txt", FILE_IGNORE_NEW_LINES);

    $emailExists = false;
    foreach ($lines as $line) {
        list($storedEmail, $storedFirstName, $storedLastName, $hashedPassword) = explode(":", $line);
        if ($email === $storedEmail) {
            $emailExists = true;
            break;
        }
    }

    if ($emailExists) {
        $registrationMessage = "El correo electrónico ya está registrado.";
    } else {
        if (file_put_contents("users.txt", $userRecord, FILE_APPEND)) {
            $registrationMessage = "Registro exitoso. ¡Ahora puedes iniciar sesión!";
        } else {
            $registrationMessage = "Error al registrar el usuario.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="./css/main.css">
    <style>
        .wrapper2 {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: var(--clr-main);
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
            <form method="POST" action="registrate.php" class="formulario-login">
                 <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico" required>
                </div>
                <div class="mb-3">
                    <label for="first_name" class="form-label">Nombre</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Ingrese su nombre" required>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Apellido</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Ingrese su apellido" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
                </div>
                <button type="submit" name="register" class="producto-agregar boton-login">Registrarse</button>
            </form>
            <a href="login.php" class="btn producto-agregar">Iniciar Sesión</a>
            <?php
            if (!empty($registrationMessage)) {
                echo "<p class='registration-message'>$registrationMessage</p>";
            }
            ?>
        </main>
    </div>
</body>
</html>
