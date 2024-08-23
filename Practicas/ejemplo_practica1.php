<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1</title>
</head>
<body>
    <!--
        Metodos de envio GET, POST
    --->
    <form action="ejemplo_practica1.php" method="post">

        <fieldset>
        <br>
            <legend>Formulario de registro</legend>
            <div>
                <label>Nombre</label>
                <br>
                <input type="text" name="nombre" placeholder="Ingresa tu nombre">
            </div>
            <br>
            <div>
                <label>Apellido</label>
                <br>
                <input type="text" name="apellido" placeholder="Ingresa tu apellido">
            </div>
            <br>
            <div>
                <label>Edad</label>
                <br>
                <input type="number" name="edad" placeholder="Ingresa tu edad">
            </div>
            <br>
            <div>
            <br>
                <button type="submit">Enviar información</button>
                <br>
                <br>
                <a href="ejemplo_practica1.php">Refrescar</a>
                <br>
                <br>
            </div>
        </fieldset>
    </form>

    <?php
        if (isset($_POST["nombre"]))
        {
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];

        echo "
            <p> Hola <strong>{$nombre} {$apellido} </strong> sus datos fueron enviados correctamente por post</p>
        ";
        }
    ?>
        <br>
        <form action="ejemplo_practica1.php" method="get" name="agregar_mes">
        <fieldset>
        <br>
            <legend>Agregar meses</legend>
            <div>
                <label>Nombre</label>
                <br>
                <input type="number" min="1" max="12" name="mes" placeholder="Ingrese el mes">
            </div>
            <br>
            <div>
            <br>
                <button type="submit">Enviar información</button>
                <br>
                <br>
                <a href="ejemplo_practica1.php">Refrescar</a>
                <br>
                <br>
            </div>
        </fieldset>
        </form>

        <?php
            //procesar informacion por metodo get

            $meses = [
                'Enero',
                'Abril',
                'Mayo',
                'Agosto',
                'Diciembre',
                
            ];

            if (isset($_GET['mes'])) {
                if (key_exists($_GET["mes"] - 1, $meses)) {
                    echo $meses[$_GET["mes"] - 1];
                }else {
                    echo "Mes no existe o no fue agregado";
                }  
            }
        ?>
</body>
</html>