<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ><p>Juan Josue Canahuire choque</p>
     <!-- etiquita PHP -->



    <?php
    echo "implemento de php </br>";
    $dato_1 = 1;
    $dato_2 = 100;

    echo "el resultado es: "  .$dato_1 + $dato_2 ."</br>";
    
    echo "incremento: " .$dato_1+1 ."</br>";
    if ($dato_2 == 2) {
        echo "no es igual: ";
    }else if ($dato_2 == 100){
        echo "si es igual: ";
    }

    //  declarar 7 tipo de datos 
    // JUAN JOSUE CANAHUIRE CHOQUE
    $entero = 42;
    $decimal = 3.14;
    $cadena = "Hola mundo";
    $boleano = true;
    $arreglo = array(1, 2, 3, 4, 5);
    $objeto = new stdClass();
    $nulo = null;
    
     /// otras cosas
     ///Juan josue canahuire choque
     $array = array("1", "2", "3", "4", "5");
     foreach ($array as $numero) {
        echo $numero . "\n";
     }
    
     $array = array("1", "2", "3", "4", "5"); 
     $nombre =["josue", "katia", "pedro", "ruben"];


     foreach ($nombre as $item){
        echo $item."<br>";
     }



     $numeros = range(1, 12); 

     foreach ($numeros as $tabla) {
         echo "Tabla de multiplicar del $tabla: "."</br>";

         foreach ($numeros as $numero) {
             $resultado = $tabla * $numero;
             echo "$tabla x $numero = $resultado"."</br>";
         }
         echo "</br>"; 
     }
     


    ?>
</body>
</html>