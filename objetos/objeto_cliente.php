<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Cliente Info</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Información del Cliente</h1>
        <table class="table-success">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Atributo</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('../clases/cliente.php');

                $cliente = new cliente();
                $cliente->nit = $_GET['txtNit'];
                $cliente->telefono = $_GET['txtTelefono'];
                $cliente->apellido = $_GET['txtApellido'];
                $cliente->asiganarNombre($_GET['txtNombre']);
                $cliente->direccion = $_GET['txtDireccion'];

                echo '<tr class="table-info">
                        <th scope="row">1</th>
                        <td>NIT</td>
                        <td>' . $cliente->nit . '</td>
                    </tr>';
                echo '<tr class="table-info">
                        <th scope="row">2</th>
                        <td>Nombre</td>
                        <td>' . $cliente->verNombre() . '</td>
                    </tr>';
                echo '<tr class="table-info">
                        <th scope="row">3</th>
                        <td>Apellido</td>
                        <td>' . $cliente->apellido . '</td>
                    </tr>';
                echo '<tr class="table-info">
                        <th scope="row">4</th>
                        <td>Teléfono</td>
                        <td>' . $cliente->telefono . '</td>
                    </tr>';
                echo '<tr class="table-info">
                        <th scope="row">5</th>
                        <td>Dirección</td>
                        <td>' . $cliente->direccion . '</td>
                    </tr>';
                echo '<tr class="table-info">
                        <th scope="row">6</th>
                        <td>Datos Completos</td>
                        <td>' . $cliente->verDatos() . '</td>
                    </tr>';
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
