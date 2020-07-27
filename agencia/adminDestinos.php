<?php
    require 'config/config.php';

    require 'clases/Conexion.php';
    require 'clases/Destino.php';
        $Destino = new Destino();
        $destinos = $Destino->listarDestinos();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main class="container bg-light rounded">
            <h1 class="py-3">Panel de administración de destinos</h1>

            <table class="table table-bordered table-stripped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Destino (aeropuerto)</th>
                        <th>Región</th>
                        <th>Precio</th>
                        <th>Totales</th>
                        <th>Disp</th>
                        <th colspan="2" class="text-center">
                            <a href="" class="btn btn-dark">
                                Agregar  <i class="far fa-plus-square"></i>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
<?php
            foreach( $destinos as $destino ){
?>
                    <tr>
                        <td><?= $destino['destID'] ?></td>
                        <td><?= $destino['destNombre'] ?></td>
                        <td><?= $destino['regNombre'] ?></td>
                        <td>$<?= $destino['destPrecio'] ?></td>
                        <td><?= $destino['destAsientos'] ?></td>
                        <td><?= $destino['destDisponibles'] ?></td>
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