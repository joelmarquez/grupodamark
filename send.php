<?php

if ($_POST['empresa'] == "grupodamark") {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = 'info@grupodamark.com';
    $titulo = 'Email desde sitio web Grupo Damark';
    $msg = "OK";
    
    $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
    
    if ($_POST['submit']) {
    if (mail ($para, $titulo, $msjCorreo)) {
    header("Location: index.php?Ok");
    } else {
    echo 'Falló el envio';
        }
    }

} 

?>