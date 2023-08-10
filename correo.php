<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "izan5pro@gmail.com"; // Cambia esto al destinatario deseado
    $subject = "Mensaje desde mi página web";
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"] . "\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
