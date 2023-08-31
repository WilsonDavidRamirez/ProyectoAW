<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encabezado y metadatos -->
</head>
<body>
    <p>¡Hola mundo!</p>
    <p>Bienvenido, <?php echo $_SESSION["email"]; ?></p>
</body>
</html>
