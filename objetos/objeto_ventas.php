<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Ventas Info</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Información de Ventas</h1>
        <table class="table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Atributo</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('../clases/Ventas.php');

                $ventas = new Ventas();
                // Heredados
                $ventas->nit = $_GET['txtNit'];
                $ventas->telefono = $_GET['txtTelefono'];
                $ventas->apellido = $_GET['txtApellido'];
                $ventas->asiganarNombre($_GET['txtNombre']);
                $ventas->direccion = $_GET['txtDireccion'];
                // Del empleado
                $ventas->codigo = $_GET['txtCodigo'];
                $ventas->nivelesAcademicos = $_GET['txtNivelAcademico'];
                $ventas->sueldoBase = $_GET['txtSueldoBase'];
                // Del ventas
                $ventas->tipoContratacion = $_GET['txtTipoContratacion'];
                $ventas->comisionVenta = $_GET['txtComisionVentas'];

                echo '<tr>
                        <th scope="row">1</th>
                        <td>NIT</td>
                        <td>' . $ventas->nit . '</td>
                    </tr>';
                echo '<tr class="table-success">
                        <th scope="row">2</th>
                        <td>Nombre</td>
                        <td>' . $ventas->verNombre() . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">3</th>
                        <td>Apellido</td>
                        <td>' . $ventas->apellido . '</td>
                    </tr>';
                echo '<tr class="table-success">
                        <th scope="row">4</th>
                        <td>Teléfono</td>
                        <td>' . $ventas->telefono . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">5</th>
                        <td>Dirección</td>
                        <td>' . $ventas->direccion . '</td>
                    </tr>';
                echo '<tr class="table-success">
                        <th scope="row">6</th>
                        <td>Código</td>
                        <td>' . $ventas->codigo . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">7</th>
                        <td>Nivel Académico</td>
                        <td>' . $ventas->nivelesAcademicos . '</td>
                    </tr>';
                echo '<tr class="table-success">
                        <th scope="row">8</th>
                        <td>Sueldo Base</td>
                        <td>' . $ventas->sueldoBase . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">9</th>
                        <td>Tipo de Contratación</td>
                        <td>' . $ventas->tipoContratacion . '</td>
                    </tr>';
                echo '<tr class="table-success">
                        <th scope="row">10</th>
                        <td>Comisión de Venta</td>
                        <td>' . $ventas->comisionVenta . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">11</th>
                        <td>Sueldo Líquido</td>
                        <td>' . $ventas->calcularSueldoLiquido() . '</td>
                    </tr>';
                echo '<tr class="table-success">
                        <th scope="row">12</th>
                        <td>Datos Completos</td>
                        <td>' . $ventas->verDatos() . '</td>
                    </tr>';
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
