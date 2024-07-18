<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-8">
                    <h1 class="text-center">Formulario cliente</h1>
                    <form action="../objetos/objeto_cliente.php" method="get">
                        <div class="mb-3">
                            <label for="txtNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="ingrese nombre">
                          </div>
                          <div class="mb-3">
                            <label for="txtApellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese apellido">
                          </div>
                          <div class="mb-3">
                            <label for="txtTelefono" class="form-label">Telefono</label>
                            <input type="number" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Ingrese telefono">
                          </div>
                          <div class="mb-3">
                            <label for="txtDireccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="Direccion" name="txtDireccion" placeholder="ingreses direccion">
                          </div>
                          <div class="mb-3">
                            <label for="txtNit" class="form-label">Nit</label>
                            <input type="number" class="form-control" id="Nit" name="txtNit" placeholder="ingreses Nit">
                          </div>
                          <div class="mb-3 text-center">
                            <input type="submit" class="btn btn-success" id="btnEnviar" name="btnEnviar" value="enviar datos">
                           
                               
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>