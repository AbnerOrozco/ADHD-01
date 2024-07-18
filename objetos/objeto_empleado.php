<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Empleado Info</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Información del Empleado</h1>
        <table class="table-danger">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Atributo</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('../clases/Empleado.php');
                
                $Empleado = new Empleado();
                // Heredados
                $Empleado->nit = $_GET['txtNit'];
                $Empleado->telefono = $_GET['txtTelefono'];
                $Empleado->apellido = $_GET['txtApellido'];
                $Empleado->asiganarNombre($_GET['txtNombre']);
                $Empleado->direccion = $_GET['txtDireccion'];
                // Del empleado
                $Empleado->codigo = $_GET['txtCodigo'];
                $Empleado->nivelesAcademicos = $_GET['txtNivelAcademico'];
                $Empleado->sueldoBase = $_GET['txtSueldoBase'];

                echo '<tr class="table-dark">
                        <th scope="row">1</th>
                        <td>NIT</td>
                        <td>' . $Empleado->nit . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">2</th>
                        <td>Nombre</td>
                        <td>' . $Empleado->verNombre() . '</td>
                    </tr>';
                echo '<tr class="table-dark">
                        <th scope="row">3</th>
                        <td>Apellido</td>
                        <td>' . $Empleado->apellido . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">4</th>
                        <td>Teléfono</td>
                        <td>' . $Empleado->telefono . '</td>
                    </tr>';
                echo '<tr class="table-dark">
                        <th scope="row">5</th>
                        <td>Dirección</td>
                        <td>' . $Empleado->direccion . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">6</th>
                        <td>Código</td>
                        <td>' . $Empleado->codigo . '</td>
                    </tr>';
                echo '<tr class="table-dark">
                        <th scope="row">7</th>
                        <td>Nivel Académico</td>
                        <td>' . $Empleado->nivelesAcademicos . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">8</th>
                        <td>Sueldo Base</td>
                        <td>' . $Empleado->sueldoBase . '</td>
                    </tr>';
                echo '<tr class="table-dark">
                        <th scope="row">9</th>
                        <td>Sueldo Líquido</td>
                        <td>' . $Empleado->calcularSueldoLiquido() . '</td>
                    </tr>';
                echo '<tr>
                        <th scope="row">10</th>
                        <td>Datos Completos</td>
                        <td>' . $Empleado->verDatos() . '</td>
                    </tr>';
                ?>
                
            </tbody>
        </table>
    </div>

 

</body>
</html>






