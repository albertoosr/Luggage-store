<?php if (isset($_POST['nombre'])) {
    $destinatario = $_POST['correo'];
    $asunto = "LUGGAGE STORE - ENVIO DE INFORMACIÓN";
    $cuerpo = " <b>Nombre: </b>" . $_POST['nombre'] . "</br>" . "<b> Telefono: </b>" . $_POST['telefono'] . "</br>" . "<b>  Descripción: </b>" . $_POST['descripcion'];
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: LUGGAGE STORE<luggagestore@store.com>\r\n";
    $headers .= "Return-path: luggagestore@store.com\r\n";
    $headers .= "Cc: luggagestore@store.com\r\n";
    $headers .= "Bcc: luggagestore@store.com\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        // header('Location: contacto.php?email=enviado');
        echo "<script> window.location='contacto.php?email=enviado'; </script>";
    } else {
        // header('Location: contacto.php?email=fallo');
        echo "<script> window.location='contacto.php?email=fallo'; </script>";
    }
}
?>