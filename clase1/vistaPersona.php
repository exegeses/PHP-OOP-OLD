<?php
    require 'helper.php';
    require 'Persona1.php';
    $objPersona = new Persona();
    $objPersona->setNombre('Ronnie');
    $objPersona->setApellido('Woods');
    //mostrar($objPersona);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Implementando Persona</h1>
    <?php
        echo $objPersona->verDatos();
    ?>

</body>
</html>