<?php
$info = $_POST['info'];
$archivo = 'compras.txt'; // Nombre del archivo de texto

// Agregar el contenido al archivo de texto
file_put_contents($archivo, $info, FILE_APPEND);

// Devolver una respuesta en formato JSON
echo json_encode(['mensaje' => 'Archivo actualizado']);
?>
