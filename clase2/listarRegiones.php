<?php
    $link = new PDO(
                    'mysql:host=localhost;dbname=agencia',
                    'root',
                    'root'
                );
    $sql = "SELECT regID, regNombre
                FROM regiones";

    $stmt = $link->prepare($sql);
    $stmt->execute();

    $regiones = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <main class="container">
    <h1>listado de regiones</h1>

        <ul class="list-group">
        <?php
            foreach( $regiones as $region ){
        ?>
            <li class="list-group-item list-group-item-action">
                <?= $region['regID'] ?>
                <?= $region['regNombre'] ?>
            </li>        
        <?php
            }
        ?>
        </ul>


    </main>

</body>
</html>