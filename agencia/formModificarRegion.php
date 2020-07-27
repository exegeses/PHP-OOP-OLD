<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region();
    $Region->verRegionPorID();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>
        <main class="container bg-light rounded text-secondary">
            <h1 class="py-3">Modificación de una  región</h1>
                <div class="bg-light border p-4 m-4" >
                    <form action="modificarRegion.php" method="post">
                        Región:
                        <br>
                        <input type="text" name="regNombre" 
                               value="<?= $Region->getRegNombre(); ?>"
                               class="form-control" required>
                        <input type="hidden" name="regID" 
                               value="<?= $Region->getRegID() ?>">
                        <br>
                        <button class="btn btn-dark">Modificar Región</button>
                        <a href="adminRegiones.php" class="btn btn-outline-secondary">
                            Volver al panel de regiones
                        </a>
                    </form>
                </div>
        </main>

<?php
include 'includes/footer.php';
?>