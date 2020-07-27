<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region();
    $regiones = $Region->listarRegiones();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>
        <main class="container bg-light rounded text-secondary">
            <h1 class="py-3">Alta de un nuevo destino</h1>
                <div class="bg-light border p-4 m-4" >
                    <form action="agregarDestino.php" method="post">
                        Destino:
                        <br>
                        <input type="text" name="destNombre" class="form-control" required>
                        <br>
                        Región:
                        <br>
                        <select name="regID" class="form-control" required>
                            <option value="">Seleccione una región</option>
        <?php
                foreach( $regiones as $region ){
        ?>
                            <option value="<?= $region['regID'] ?>"><?= $region['regNombre'] ?></option>
        <?php
                }
        ?>
                        </select>
                        <br>
                        Precio:
                        <br>
                        <input type="number" name="destPrecio" class="form-control"
                               step="0.01" min="0" required>
                        <br>
                        Asientos Totales:
                        <br>
                        <input type="number" name="destAsientos" class="form-control"
                               step="1" min="0" required>
                        <br>
                        Asientos Disponibles:
                        <br>
                        <input type="number" name="destDisponibles" class="form-control"
                               step="1" min="0" required>
                        <br>
                        <button class="btn btn-dark">Agregar Destino</button>
                        <a href="adminRegiones.php" class="btn btn-outline-secondary">
                            Volver al panel de regiones
                        </a>
                    </form>
                </div>
        </main>

<?php
include 'includes/footer.php';
?>