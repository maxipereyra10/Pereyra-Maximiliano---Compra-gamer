<?php
    // Para capturar la info que se ingresa en lso inputs del formulario, tengo que crear variables.

    $nombre = $_POST ['full-name'];
    $mail = $_POST ['email'];
    $mensaje = $_POST ['textarea'];


    // A quien le mando esta info

    $para = 'maxipereyra997@gmail.com';
    $asunto = 'este mail fue enviado desde la web';

    // para que funcione - 

    mail($para), $asunto, utf8_decode($nombre, $mail, $mensaje));
    

    //Funcion que redirecciona al usuario una vez que completo elform
    header('Location:exito.html');





?>