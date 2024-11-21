<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div>
        <h1>PHP BASICO</h1>
        <ul>
            <ol>1. operaciones con String</ol>
            <ol>2. operadores aritmetico</ol>
            <ol>3. tipos de datos</ol>
            <ol>4. operaciones con array's</ol>
            <ol>5. condicionales</ol>
            <ol>6. cliclos</ol>
            <ol>7. salir</ol>
        </ul>
        <h6>Formulario</h6>
        <hr>
        <!-- JUAN JOSUE CANAHUIRE CHOQUE-->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="numero" class="form-label">ingresar numero</label>
                <input type="numero" name="numero" class="form-control" id="numero" placeholder="ingresa numero">
            </div>
            <!---<label for="numero">Ingresar numero</label>
        <input type="number" name="numero" id="numero">--->
            <button class="btn btn-primary" type="submit">Button</button>
            <hr>



        </form>
        <?php
        include "./operadoresLogicos.php";
        include "./operacionesString.php";
        include "./Aritmeticos.php";
        include "./array.php";
        include "./ciclos.php";
        include "./condicionales.php";
        include "./datos.php";
        

        // codigo php
        ///echo $_GET["fruta"]."<br>";

        if (isset($_GET["precio"])) {
            echo $_GET["precio"] . "<br>";
        }

        if (isset($_GET["numero"])) {
            echo $_GET["numero"] . "<br>";
        }

        if (isset($_POST["numero"])) {
            $opcion = $_POST["numero"];


            switch ($opcion) {
                case 1:
                    echo "<br>";
                    $operaciones = new operacionesString();
                    echo "ingreso al caso numero 1";
                    $operaciones->funcionesString();
                    echo "<br>";
                    break;
                default;
                    echo "<br>";
                    echo "ingresa una  opcion valida";
                    echo "<br>";
                    break;
    
                case 2:
                    echo "<br>";
                    $ar = new operacionesAritmeticos;
                    echo "ingreso al caso numero 2";
                    $ar->funcionesAritmeticos();
                    echo "<br>";
                    break;
                case 3:
                    echo "<br>";
                    $dt = new operacionesDatos();
                    echo "ingreso al caso numero 3";
                    $dt->funcionesDatos();
                    echo "<br>";
                    break;
                case 4:
                    echo "<br>";
                    $ar = new operacionesArray();
                    echo "ingreso al caso numero 4";
                    $ar->funcionesArray();
                    echo "<br>";
                    break;
                case 5:
                    echo "<br>";
                    $co = new operacionesCondicionales();
                    echo "ingreso al caso numero 5";
                    $co->funcionesCondicionales();
                    echo "<br>";
                    break;
                case 6:
                    echo "<br>";
                    $cl = new operacionesCiclos();
                    echo "ingreso al caso numero 6";
                    $cl->funcionesCiclos();
                    echo "<br>";
                    break;
                        
                
            }
        }

        //echo $_POST["numero"];

        $ol = new operadoresLogicos();
        $ol->operadores();
        $ol->saludar();



        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>