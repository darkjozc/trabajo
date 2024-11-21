<?php
class operacionesDatos
{

    public function funcionesDatos()
    {
        echo <<<'EOT'
            <pre>
            Entero (int)	$numero = 42;
            Punto flotante (float)	$precio = 19.99;
            Cadena (string)	$nombre = "Juan";
            Booleano (bool)	$esActivo = true;
            Arreglo indexado (array)	$colores = ["rojo", "verde", "azul"];
            Arreglo asociativo (array)	$edad = ["Juan" => 25, "Ana" => 22];
            Objeto (object)	$persona1 = new Persona("Juan", 25);
            NULL	$variable = null;
            Recurso (resource)	$archivo = fopen("documento.txt", "r");
            Empty (verificación de vacío)	if (empty($variable)) { echo "Vacía"; }

            </pre>

        EOT;
    }
}
