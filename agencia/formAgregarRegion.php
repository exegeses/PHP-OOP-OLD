<?php
    require 'config/config.php';
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>
        <main class="container bg-light rounded text-secondary">
            <h1 class="py-3">Alta de una nueva región</h1>
                <div class="bg-light border p-4 m-4" >
                    <form action="agregarRegion.php" method="post" >
                        Región:
                        <br>
                        <input type="text" name="regNombre" class="form-control" required>
                        <br>
                        <button class="btn btn-dark">Agregar Región</button>
                        <a href="adminRegiones.php" class="btn btn-outline-secondary">
                            Volver al panel de regiones
                        </a>
                    </form>
                </div>
        </main>

<?php
include 'includes/footer.php';
?>