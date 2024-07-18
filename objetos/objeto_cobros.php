<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Información de Cobros</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Información de Cobros</h1>
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
                include_once('../clases/Cobros.php');

                $Cobros = new Cobros();
                // Heredados
                $Cobros->nit = $_GET['txtNit'];
                $Cobros->telefono = $_GET['txtTelefono'];
                $Cobros->apellido = $_GET['txtApellido'];
                $Cobros->asiganarNombre($_GET['txtNombre']);
                $Cobros->direccion = $_GET['txtDireccion'];
                // Del empleado
                $Cobros->codigo = $_GET['txtCodigo'];
                $Cobros->nivelesAcademicos = $_GET['txtNivelAcademico'];
                $Cobros->sueldoBase = $_GET['txtSueldoBase'];
                // Del cobros
                $Cobros->bonificacion = $_GET['txtBonificacion'];
                $Cobros->bonificacionCobro = $_GET['txtBonificacionCobro'];
                $Cobros->comisionCobros = $_GET['txtComisionCobros'];

                echo '<tr class="table-info">
                        <th scope="row">1</th>
                        <td>NIT</td>
                        <td>' . $Cobros->nit . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">2</th>
                        <td>Nombre</td>
                        <td>' . $Cobros->verNombre() . '</td>
                    </tr>';
                echo '<tr class="table-info">
                        <th scope="row">3</th>
                        <td>Apellido</td>
                        <td>' . $Cobros->apellido . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">4</th>
                        <td>Teléfono</td>
                        <td>' . $Cobros->telefono . '</td>
                    </tr>';
                echo '<tr class="table-info">
                        <th scope="row">5</th>
                        <td>Dirección</td>
                        <td>' . $Cobros->direccion . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">6</th>
                        <td>Código</td>
                        <td>' . $Cobros->codigo . '</td>
                    </tr>';
                echo '<tr class="table-info">
                        <th scope="row">7</th>
                        <td>Nivel Académico</td>
                        <td>' . $Cobros->nivelesAcademicos . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">8</th>
                        <td>Sueldo Base</td>
                        <td>' . $Cobros->sueldoBase . '</td>
                    </tr>';
                echo '<tr class="table-info">
                        <th scope="row">9</th>
                        <td>Bonificación</td>
                        <td>' . $Cobros->bonificacion . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">10</th>
                        <td>Bonificación Cobro</td>
                        <td>' . $Cobros->bonificacionCobro . '</td>
                    </tr>';
                echo '<tr class="table-info">
                        <th scope="row">11</th>
                        <td>Comisión Cobros</td>
                        <td>' . $Cobros->comisionCobros . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">12</th>
                        <td>Sueldo Líquido</td>
                        <td>' . $Cobros->calcularSueldoLiquido() . '</td>
                    </tr>';
                echo '<tr class="table-info">
                        <th scope="row">13</th>
                        <td>Datos Completos</td>
                        <td>' . $Cobros->verDatos() . '</td>
                    </tr>';
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>


