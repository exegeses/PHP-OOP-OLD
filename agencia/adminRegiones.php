<?php
    require 'config/config.php';

    require 'clases/Conexion.php';
    require 'clases/Region.php';
        $Region = new Region();
        $regiones = $Region->listarRegiones();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main class="container bg-light rounded">
            <h1 class="py-3">Panel de administración de regiones</h1>

            <table class="table table-bordered table-stripped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Región</th>
                        <th colspan="2" class="text-center">
                            <a href="" class="btn btn-dark">
                                Agregar  <i class="far fa-plus-square"></i>
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
                            <a href="" class="btn btn-outline-secondary">
                                Modificar  <i class="far fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-secondary">
                                Eliminar  <i class="far fa-trash-alt"></i>
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