<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Registro de usuario</h1>
        <hr>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <form id="frmRegistro" onsubmit="return agregarUsuarioNuevo()">
                    <label for="">Nombre personal</label>
                    <input type="text" id="nombre" class="form-control" required name="nombre">
                    <label for="">Fecha de nacimiento</label>
                    <input type="date" id="fechaNacimiento" class="form-control" required name="fechaNacimiento">
                    <label for="">Email o correo</label>
                    <input type="email" id="email" class="form-control" required name="email">
                    <label for="">Nombre de usuario</label>
                    <input type="text" id="usuario" class="form-control" required name="usuario">
                    <label for="">Password</label>
                    <input type="password" id="password" class="form-control" required name="password">
                    <br>
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <button class="btn btn-primary">Registrar</button>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="index.php" class="btn btn-success">Login</a>
                        </div>
                    </div>
            </div>
                </form>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/sw.js"></script>
    <script>
        function agregarUsuarioNuevo() {
            $.ajax({
                type: "POST",
                data: $('#frmRegistro').serialize(),
                url: "procesos/usuario/registro/agregarUsuario.php",
                success: function(respuesta) {
                    respuesta = respuesta.trim();
                    
                    if (respuesta == 1) {
                        $('#frmRegistro')[0].reset();
                        swal(":D", "Agregado con exito", "success");
                    } else if(respuesta == 2){
                        swal("Este usuario ya existe, por favor escribe otro")
                    } else{
                        swal(":(", "Fallo al agregar", "error");
                    }
    
                }
            });

            return false;
        }
    </script>
</body>
</html>