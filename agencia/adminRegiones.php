<?php
    require 'config/config.php';

    require 'clases/Conexion.php';
    require 'clases/Region.php';
        $Region = new Region();
        $regiones = $Region->listarRegiones();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Panel de administración de regiones</h1>

            <table class="table table-bordered table-stripped table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Región</th>
                        <th colspan="2">
                            <a href="" class="btn btn-success">
                                Agregar
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
<?php
            foreach( $regiones as $region ){
?>
                    <tr>
                        <td><?= $region['regID'] ?></td>
                        <td><?= $region['regNombre'] ?></td>
                        <td>
                            <a href="" class="btn btn-warning">
                                Modificar
                            </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
<?php
            }
?>
                </tbody>
            </table>



        </main>

<?php
    include 'includes/footer.php';
?>