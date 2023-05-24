<?php

    $number = $_POST["number"];

    if (is_numeric($number)) {
        // echo ;
        if (($number % 2) == 0) {
            if ($number > 10) {
                echo  'El numero que ingresó es par y es '.$number. ', por ende es mayor a diez' ;

            } elseif ($number < 10) {
                echo  'El numero que ingresó es impar y es '.$number. ', por ende es menor a diez' ;
            } else {
                echo 'El numero que ingresó es exactamente igual a '.$number;
            }
        } elseif (($number % 2) != 0) {
            if ($number > 10) {
                echo  'El numero que ingresó es par y es '.$number. ', por ende es mayor a diez' ;
            } elseif ($number < 10) {
                echo  'El numero que ingresó es impar y es '.$number. ', por ende es menor a diez' ;
            } else {
                echo 'El numero que ingresó es exactamente igual a '.$number;
            }
        } elseif ($number == 0){
            echo 'El numero que ingresó no es par ni impar, por ende es igual a '.$number ;
        } else { 
            echo 'El numero que ingresó es impar y es '.$number;
        };
    } else{
        echo '<script language="javascript">alert("Deja de manipular el front, mamón");</script>';
        echo 'Ya valiste {aquí un día irá tu ip}';

        
    };










?>



