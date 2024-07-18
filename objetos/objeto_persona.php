<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Persona Info</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Información de la Persona</h1>
        <table class="table-secondary">
            <thead>
                <tr class="table-secondary">
                    <th scope="col">#</th>
                    <th scope="col">Atributo</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('../clases/Persona.php');

                $persona = new Persona();
                $persona->asiganarNombre($_GET['txtNombre']);
                $persona->apellido = $_GET['txtApellido'];
                $persona->direccion = $_GET['txtDireccion'];
                $persona->telefono = $_GET['txtTelefono'];

                echo '<tr class="table-success">
                        <th scope="row">1</th>
                        <td>Nombre</td>
                        <td>' . $persona->verNombre() . '</td>
                    </tr>';
                echo '<tr class="table-success">
                        <th scope="row">2</th>
                        <td>Apellido</td>
                        <td>' . $persona->apellido . '</td>
                    </tr>';
                echo '<tr class="table-success">
                        <th scope="row">3</th>
                        <td>Nombre Completo</td>
                        <td>' . $persona->nombreCompleto() . '</td>
                    </tr>';
                echo '<tr class="table-success">
                        <th scope="row">4</th>
                        <td>Teléfono</td>
                        <td>' . $persona->telefono . '</td>
                    </tr>';
                echo '<tr class="table-success">
                        <th scope="row">5</th>
                        <td>Dirección</td>
                        <td>' . $persona->direccion . '</td>
                    </tr>';
                echo '<tr class="table-success">
                        <th scope="row">6</th>
                        <td>Datos Completos</td>
                        <td>' . $persona->verDatos() . '</td>
                    </tr>';
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
