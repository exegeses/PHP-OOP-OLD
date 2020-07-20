<?php
    require 'config/config.php';

    require 'clases/Conexion.php';
    require 'clases/Destino.php';
        $Destino = new Destino();
        $destinos = $Destino->listarDestinos();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main class="bg-light">
            <h1 class="text-dark">Panel de administración de destinos</h1>

            <table class="table table-bordered table-stripped table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Destino (aeropuerto)</th>
                        <th>Región</th>
                        <th>Precio</th>
                        <th>Totales</th>
                        <th>Disponibles</th>
                        <th colspan="2">
                            <a href="" class="btn btn-success">
                                Agregar
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
                        <td><?= $destino['destPrecio'] ?></td>
                        <td><?= $destino['destAsientos'] ?></td>
                        <td><?= $destino['destDisponibles'] ?></td>
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