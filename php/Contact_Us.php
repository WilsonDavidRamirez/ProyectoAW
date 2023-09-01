<?php
if (isset($_POST['PNombre'])) {
    $PNombre = $_POST['PNombre'];
    $SNombre = $_POST['SNombre'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
    $Mensaje = $_POST['Mensaje'];

    $nombreArchivo = "Contact_Us/$PNombre" . "_$SNombre" . "_Mensaje.txt";

    $contenido = "Mensaje de: $PNombre $SNombre\n";
    $contenido .= "Correo: $Email\n";
    $contenido .= "Telefono: $Telefono\n\n";
    $contenido .= "Mensaje:\n$Mensaje";

    file_put_contents($nombreArchivo, $contenido);


    echo json_encode(["Resultado" => "Message sent successfully"]);
}
?>