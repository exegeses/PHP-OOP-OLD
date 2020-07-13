<?php
    require 'Persona.php';
    require 'Cliente.php';
    $Cliente = new Cliente('Cosme', 'Fulanito', 25841);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Datos de Cliente</h1>

    <?= $Cliente->verDatos(); ?>

</body>
</html>