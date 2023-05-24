<?php

    $resistencia = $_POST['resistencia'];
    $intensidad_corriente = $_POST['intensidad_corriente'];

    if  ( (is_numeric($resistencia)) && (is_numeric(($intensidad_corriente))) ) {
        $voltaje = $resistencia * $intensidad_corriente;
        echo 'El voltaje es: '.$voltaje.' Voltios';

    } else {
        echo 'deja de manipular el html, no eres haker crack';
    }
?>