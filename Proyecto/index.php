<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

    <main>

        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes un usuario?</h3>
                    <p>Inicie sesion para entrar en la app</p>
                    <button id="button_iniciar_sesion">Iniciar Sesion</button>
                </div>

                <div class="caja_trasera_registro">
                    <h3>¿No tienes un usuario?</h3>
                    <p>Registrate para entrar en la app</p>
                    <button id="button_registro">Registrarse</button>
                </div>
            </div>
            
            <div class="contenedor_login_registro">

                <form action="" class="formulario_login">

                    <h2>Inciar Sesion</h2>
                    <input type="text" placeholder="Usuario"> 
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>

                </form>

                <form action="" class="formulario_registro">

                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre"> 
                    <input type="text" placeholder="ID">
                    <input type="text" placeholder="Usuario"> 
                    <input type="password" placeholder="Contraseña">
                    <button>Registrarse</button>

                </form>

             
            </div>

        </div>

    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>