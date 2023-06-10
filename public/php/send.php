<?php

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_msg = $_POST['user_msg'];

if(empty($user_name) || empty($user_email) || empty($user_msg)) {

    echo json_encode('error');

} else {
    $msg = "Nombre: " . $user_name . "\r\n" ."Mensaje: " . $user_msg . "\r\n" . "Email: " . $user_email;           
    $email = "iodea.assistance@gmail.com";
    $header = "From: " . $user_email . "\r\n" . 
    "Reply-To: " . $user_email . "\r\n" . 
    "X-Mailer: PHP/" . phpversion();
    $mail = mail($email, 'CONSULTA', $msg, $header);

    if($mail) {

        $header = "From: " . $email . "\r\n" . 
        "Reply-To: " . $email . "\r\n" . 
        "X-Mailer: PHP/" . phpversion();
        $msg = "Gracias por confiar en nosotros, en la brevedad nos cumunicaremos con usted.";
        $mail = mail($user_email, "CONSULTA" , $msg, $header);

        echo json_encode('success');
    }
}