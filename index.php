<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper fadeInDown">
                    <div id="formContent">
                        <!-- Tabs Titles -->

                        <!-- Icon -->
                        <div class="fadeIn first">
                        <img src="img/índice.jpg" id="icon" alt="User Icon" />
                        <h1>Gestor de archivos</h1>
                        </div>

                        <!-- Login Form -->
                        <form method="POST" id="frmLogin" onsubmit="return logear()">
                        <input type="text" id="login" class="fadeIn second" name="login" placeholder="username" required>
                        <input type="password" id="password" class="fadeIn third" name="login" placeholder="password" required>
                        <input type="submit" class="fadeIn fourth" value="Entrar">
                        </form>

                        <!-- Remind Passowrd -->
                        <div id="formFooter">
                        <a class="underlineHover" href="registro.php">Registrar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/sw.js"></script>

    <script>
        function logear() {
            $.ajax({
                type: "POST",
                data: $('#frmLogin').serialize(),
                url:"procesos/usuario/login/login.php",
                success:function(respuesta){
                    respuesta = respuesta.trim();
                    if (respuesta == 2) {
                        window.location = "vistas/inicio.php";
                    } else{
                        swal(":(", "Fallo al entrar", "error");
                    }
                }
            });

            return false;
        }
    </script>
</body>
</html>