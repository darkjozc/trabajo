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
        // codigo php
        ///echo $_GET["fruta"]."<br>";

        if (isset($_GET["precio"])) {
            echo $_GET["precio"] . "<br>";
        }

        if (isset($_GET["numero"])) {
            echo $_GET["numero"] . "<br>";
        }

        echo $_POST["numero"];
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>