<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Administración Info</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Información de Administración</h1>
        <table class="table-secondary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Atributo</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('../clases/Administracion.php');

                $Admin = new Admin();
                // Heredados
                $Admin->nit = $_GET['txtNit'];
                $Admin->telefono = $_GET['txtTelefono'];
                $Admin->apellido = $_GET['txtApellido'];
                $Admin->asiganarNombre($_GET['txtNombre']);
                $Admin->direccion = $_GET['txtDireccion'];
                // Del empleado
                $Admin->codigo = $_GET['txtCodigo'];
                $Admin->nivelesAcademicos = $_GET['txtNivelAcademico'];
                $Admin->sueldoBase = $_GET['txtSueldoBase'];
                // Del administración
                $Admin->bonificacion = $_GET['txtBonificacion'];

                echo '<tr class="table-primary">
                        <th scope="row">1</th>
                        <td>NIT</td>
                        <td>' . $Admin->nit . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">2</th>
                        <td>Nombre</td>
                        <td>' . $Admin->verNombre() . '</td>
                    </tr>';
                echo '<tr class="table-primary">
                        <th scope="row">3</th>
                        <td>Apellido</td>
                        <td>' . $Admin->apellido . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">4</th>
                        <td>Teléfono</td>
                        <td>' . $Admin->telefono . '</td>
                    </tr>';
                echo '<tr class="table-primary">
                        <th scope="row">5</th>
                        <td>Dirección</td>
                        <td>' . $Admin->direccion . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">6</th>
                        <td>Código</td>
                        <td>' . $Admin->codigo . '</td>
                    </tr>';
                echo '<tr class="table-primary">
                        <th scope="row">7</th>
                        <td>Nivel Académico</td>
                        <td>' . $Admin->nivelesAcademicos . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">8</th>
                        <td>Sueldo Base</td>
                        <td>' . $Admin->sueldoBase . '</td>
                    </tr>';
                echo '<tr class="table-primary">
                        <th scope="row">9</th>
                        <td>Bonificación</td>
                        <td>' . $Admin->bonificacion . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">10</th>
                        <td>Sueldo Líquido</td>
                        <td>' . $Admin->calcularSueldoLiquido() . '</td>
                    </tr>';
                echo '<tr class="table-primary">
                        <th scope="row">11</th>
                        <td>Datos Completos</td>
                        <td>' . $Admin->verDatos() . '</td>
                    </tr>';
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

