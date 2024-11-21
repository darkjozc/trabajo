<?php
class operacionesCondicionales
{

    public function funcionesCondicionales()
    {
        echo <<<'EOT'
            <pre>
            Condicional simple (if)	if ($edad >= 18) { echo "Eres mayor de edad."; }	Si la condición es verdadera, ejecuta el bloque de código.
            Condicional con else	if ($edad >= 18) { echo "Eres mayor de edad."; } else { echo "Eres menor de edad."; }	Si la condición es falsa, ejecuta el bloque de código dentro de else.
            Condicional con elseif	if ($edad < 13) { echo "Eres un niño."; } elseif ($edad < 18) { echo "Eres un adolescente."; } else { echo "Eres adulto."; }	Evalúa múltiples condiciones usando elseif.
            Condicional con operador lógico AND	if ($edad >= 18 && $pais == "España") { echo "Eres adulto y vives en España."; }	Utiliza el operador && para evaluar si ambas condiciones son verdaderas.
            Condicional con operador lógico OR	`if ($edad < 18)
            Condicional con empty()	if (empty($nombre)) { echo "El nombre está vacío."; }	Verifica si una variable está vacía usando empty().
            Condicional con isset()	if (isset($nombre)) { echo "El nombre está definido."; }	Verifica si una variable está definida y no es NULL.
            Condicional con switch	switch ($opcion) { case 1: echo "Opción 1"; break; case 2: echo "Opción 2"; break; default: echo "Opción no válida"; }	Usa switch para comparar un valor con múltiples casos posibles.
            Condicional con ! (negación)	if (!isset($edad)) { echo "Edad no definida."; }	Usa ! para negar una condición y verificar si algo no está definido.
            Condicional con match	$resultado = match ($edad) { 18 => "Eres adulto", 17 => "Eres adolescente", default => "Edad no válida"};	Similar a switch, pero permite comparar directamente el valor con varios casos, introducido en PHP 8.0.
            </pre>

        EOT;
    }
}
