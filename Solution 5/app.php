
<?php
    $dato_1 = $_POST['val_1'];
    $dato_2 = $_POST['val_2'];

    validar($dato_1, $dato_2);

    function validar($d1, $d2){
        if((is_numeric($d1)) && (is_numeric($d2))){
            if ($d1 < $d2){
                function suma($a, $b){
                    return ($a + $b);
                }
                echo "El primer dato es mayor al segundo.<br><br>";
                echo "La suma entre ambos da: ".suma($d1,$d2);

            } elseif ($d1 > $d2){
                $producto = $d1 * $d2;
                $division = $d1 / $d2;
                echo "El primer dato es mayor al segundo.<br><br>";
                echo "Producto entre primer dato y segundo dato: ".$producto."<br>";
                echo "División entre primer dato y segundo dato :".$division;
            } else {
                echo "Ambos numeros ingresados son 0, por ende su resultado es: 0";
            }
        } else {
            echo "no manipules el html :/";
        }
    }
?>