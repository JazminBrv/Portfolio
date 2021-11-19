<?php
require = '../PHPMailer/PHPMailerAutoload.php';
    $mail= new PHPMailer;

    $to = "jazmin.brv@hotmail.com";

    $nombre= htmlentities($_POST['nombre']);
    $email=htmlentities($_POST['email']);
    $asunto=$_POST['asunto'];
    $mensaje=n12br(htmlentities($_POST['mensaje']));

    $mail->From= $email;
    $mail->addAddress($to);
    $mail->Subject=$asunto;
    $mail->isHtml(true);
    $mail->Body=$nombre.' le ha contactado desde su web y le ha enviado el siguiente mensaje: <br><p> '.$mensaje.'</p>';
    $mail->send();

?>