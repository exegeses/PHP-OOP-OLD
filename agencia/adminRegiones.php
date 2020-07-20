<?php
    require 'config/config.php';
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
                    <tr>
                        <td>id</td>
                        <td>nombre</td>
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
                </tbody>
            </table>



        </main>

<?php
    include 'includes/footer.php';
?>