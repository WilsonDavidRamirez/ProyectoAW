<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $puesto = $_POST['puesto'];

    $atIndex = strpos($email, '@');
    $userNameFromEmail = str_replace(".", "_", substr($email, 0, $atIndex));
    $folderPath = "Work_With_Us/$firstName" . "_" . $userNameFromEmail;
    $nombreArchivo = $folderPath . "/Work.txt";

    if (!is_dir($folderPath)) {
        mkdir($folderPath, 0755, true);
    }

    if (isset($_FILES['selectedFile'])) {
        $file = $_FILES['selectedFile'];
        $file_path = $folderPath . "/" . $file['name'];
        move_uploaded_file($file['tmp_name'], $file_path);
    }

    $contenido = "Postulacion de: $firstName\n";
    $contenido .= "Correo: $email\n";
    $contenido .= "Telefono: $phone\n";
    $contenido .= "Ciudad: $city\n";
    $contenido .= "Direccion: $address\n";
    $contenido .= "Area: $puesto\n";

    file_put_contents($nombreArchivo, $contenido);

    echo json_encode(["Resultado" => "Sent successfully"]);
}
?>