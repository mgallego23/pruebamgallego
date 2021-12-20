<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link href="css.css" rel="stylesheet" type="text/css">
    <title>mgallego</title>
    </head>
    
    <body>

    <div class="bienvenido">
        <?php
        // VARIABLES DEL FORMULARIO
        $usuario = $_POST['usuario'];
        $contra = $_POST['contra'];
        $opciones = $_POST['opciones'];

        // EN ESTE SI EL USUARIO Y LA CONTRASEÑA ESTA BIEN, LA SESION EMPIEZA Y YA MUESTRA TODO
        if ($usuario == "mgallego@mgallego.com" && $contra == "mgallego123" && $opciones == "YAMAHA") {
            session_start();
            $_SESSION['login-user'] = $usuario;
            header("Location: ./yamaha.php");
        }

        if ($usuario == "mgallego@mgallego.com" && $contra == "mgallego123" && $opciones == "HONDA") {
            session_start();
            $_SESSION['login-user'] = $usuario;
            header("Location: ./honda.php");
        }

        if ($usuario == "mgallego@mgallego.com" && $contra == "mgallego123" && $opciones == "KAWASAKI") {
            session_start();
            $_SESSION['login-user'] = $usuario;
            header("Location: ./kawasaki.php");
        }

        // AQUI HE HECHO EN CASO DE QUE EL USUARIO O LA CONTRASEÑA ESTE MAL APAREZCA UN MENSAJE  Y AMBOS TIENEN UN MENSAJE Y UN BOTÓN PARA VOLVER A INTENTARLO.
        if ($usuario !=  "mgallego@mgallego.com" ) {
            echo "<h1>USUARIO NO REGISTRADO <p></p></h1>";
        }
        if ($contra !=  "mgallego123" ) {
            echo "<h1>CONTRASEÑA NO REGISTRADA</h1>";
        }
        if ($usuario != "mgallego@mgallego.com" || $contra != "mgallego123") {
            echo "<h3>INTENTALO DE NUEVO</h3>";
        
        ?>
        <!-- BOTÓN PARA VOLVER ATRAS EN CASO DE INFORMACIÓN NO VÁLIDA -->
        <form action="index.html" method="post" name="formulario">
                <button type="submit">VOLVER ATRÁS</button>
        </form>
        
        <?php
        }      
        ?>
    </div>

    </body>
</html>