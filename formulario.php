<?php
$para      = 'darlybrisedtgd@ufps.edu.co';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: brisedtgomez15@gmail.com' . "\r\n" .
    'Reply-To: brisedtgomez15@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
s
mail($para, $titulo, $mensaje, $cabeceras);
?>