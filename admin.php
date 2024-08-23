<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$cabeceras = "Enviado por: " . $nombre . "\r\n";
$cabeceras .= "Su email es: " .  $email . "\r\n";
$cabeceras .= "Mensaje: " . $_POST[$mensaje] . "\r\n";
$cabeceras .= "MIME-Version: 1.0 \r\n";
$cabeceras .= "Content-type: text/plain;charset=utf-8\r\n";

$destino = "aondayner@gmail.com";

mail($destino, utf8_decode($mensaje), $header);

header("Location:index.html")
    
?>