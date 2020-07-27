<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region();

        $clase = 'danger';
        $mensaje = 'No se pudo modificar la región';
        if( $chequeo = $Region->modificarRegion() ){
            $clase = 'success';
            $mensaje = 'Región: '.$Region->getRegNombre(). ' modificada correctamente.';
        }
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main class="container bg-light rounded">
            <h1 class="py-3">Modificación de una  región</h1>

            <div class="bg-light border p-4 m-4" >

                <div class="alert alert-<?= $clase; ?>">
                    <?= $mensaje ?>
                    <br>
                    <a href="adminRegiones.php" class="btn btn-outline-secondary">
                        Volver a panel
                    </a>
                </div>

            </div>

        </main>

<?php
    include 'includes/footer.php';
?>