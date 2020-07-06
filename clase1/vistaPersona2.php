<?php
    require 'Persona2.php';
    $Persona = new Persona2('Rick', 'Sanchez');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    <main class="container">
        <h1>Implementando constructor</h1>

        <div class="alert alert-info p-4">
            <?= $Persona->verDatos() ?>
        </div>

    </main>

</body>
</html>