<?php
//Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST["phone"];
$mensaje = $_POST["message"];

//Datos para el correo
$destinatario = "daguilera@protonmail.com";
$asunto = "Contacto desde Web Daguilera.dev";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:es/enviado.html')
?>