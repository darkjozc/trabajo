<?php
class operacionesArray
{

    public function funcionesArray()
    {
        echo <<<'EOT'
            <pre>
            Crear un arreglo indexado	$colores = ["rojo", "verde", "azul"];	Crea un arreglo indexado con tres elementos.
            Acceder a un elemento del arreglo	$primerColor = $colores[0];	Accede al primer elemento del arreglo (índice 0).
            Modificar un elemento	$colores[1] = "amarillo";	Modifica el valor en el índice 1 del arreglo.
            Agregar un elemento al final	$colores[] = "morado";	Agrega un nuevo valor al final del arreglo.
            Agregar un elemento al principio	array_unshift($colores, "blanco");	Agrega un elemento al principio del arreglo.
            Eliminar el último elemento	array_pop($colores);	Elimina el último elemento del arreglo.
            Eliminar el primer elemento	array_shift($colores);	Elimina el primer elemento del arreglo.
            Buscar un valor en un arreglo	$existe = in_array("verde", $colores);	Devuelve true si "verde" se encuentra en el arreglo.
            Contar el número de elementos	$cantidad = count($colores);	Devuelve el número de elementos del arreglo.
            Recorrer un arreglo con foreach	foreach ($colores as $color) { echo $color . }	Recorre e imprime todos los elementos del arreglo.
            </pre>

        EOT;
    }
}
