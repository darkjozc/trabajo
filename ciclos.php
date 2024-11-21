<?php
class operacionesCiclos
{

    public function funcionesCiclos()
    {
        echo <<<'EOT'
            <pre>
            Bucle for (contar de 1 a 5)	for ($i = 1; $i <= 5; $i++) { echo $i  }	El ciclo for es útil cuando sabes cuántas veces quieres iterar. En este caso, cuenta del 1 al 5.
            Bucle for (decrecer de 5 a 1)	for ($i = 5; $i >= 1; $i--) { echo $i .  }	Un ciclo for que decrece el valor de $i desde 5 hasta 1.
            Bucle while (imprimir hasta 5)	$i = 1; while ($i <= 5) { echo $i .  $i++; }	El ciclo while sigue ejecutándose mientras la condición sea verdadera. Aquí imprime los números del 1 al 5.
            Bucle while (imprimir hasta 10)	$i = 1; while ($i <= 10) { echo $i . ; $i++; }	El ciclo while con un contador para imprimir del 1 al 10.
            Bucle do-while (imprimir al menos 1)	$i = 1; do { echo $i . ; $i++; } while ($i <= 5);	El ciclo do-while siempre ejecuta el bloque de código al menos una vez, incluso si la condición es falsa al inicio.
            Bucle do-while (contador de 1 a 3)	$i = 1; do { echo $i . ; $i++; } while ($i <= 3);	Similar al anterior, pero la condición se evalúa al final. En este caso imprime los números del 1 al 3.
            Bucle foreach (array indexado)	$frutas = ["manzana", "naranja", "plátano"]; foreach ($frutas as $fruta) { echo $fruta .  }	El ciclo foreach se usa para recorrer arreglos. En este caso, recorre un arreglo de frutas y las imprime.
            Bucle foreach (array asociativo)	$edades = ["Juan" => 25, "Ana" => 22, "Luis" => 30]; foreach ($edades as $nombre => $edad) { echo $nombre . " tiene " . $edad . " años.}	Recorre un arreglo asociativo y accede tanto a las claves como a los valores.
            Bucle for (múltiples de 2 hasta 10)	for ($i = 2; $i <= 10; $i += 2) { echo $i .  }	Un ciclo for que imprime los múltiplos de 2, desde 2 hasta 10.
            Bucle while (sumar números)	$i = 1; $suma = 0; while ($i <= 5) { $suma += $i; $i++; } echo "La suma es: " . $suma;	Usando un while para acumular la suma de los primeros 5 números.

            </pre>

        EOT;
    }
}
