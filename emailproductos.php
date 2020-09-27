<?php if (isset($_POST['nombre'])) {
    $destinatario = $_POST['correo'];
    $asunto = "LUGGAGE STORE - ENVIO DE INFORMACIÓN";
    $cuerpo = " <b>Nombre: </b>" . $_POST['nombre'] 
    . "</br>" . "<b> Telefono: </b>" 
    . $_POST['telefono'] . "</br>" 
    . "<b>  Compra: </b>" 
    . "<b>  Nombre del producto: </b>" 
    . $_POST['nombre'] . "</br>" 
    . "<b>  Descripción del producto: </b>" 
    . $_POST['descrip'] . "</br>" 
    . "<b>  Costo del producto: </b>" 
    . $_POST['costo'];
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: LUGGAGE STORE<luggagestore@store.com>\r\n";
    $headers .= "Return-path: luggagestore@store.com\r\n";
    $headers .= "Cc: luggagestore@store.com\r\n";
    $headers .= "Bcc: luggagestore@store.com\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        // header('Location: productos.php?email=enviado');
        echo "<script> window.location='productos.php?email=enviado'; </script>";
    } else {
        // header('Location: productos.php?email=fallo');
        echo "<script> window.location='productos.php?email=fallo'; </script>";
    }
    
}
?>