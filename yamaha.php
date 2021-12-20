<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link href="./css.css" rel="stylesheet" type="text/css">
    <link href="./menu.css" rel="stylesheet" type="text/css">
    <title>mgallego</title>
    </head>
    
    <body>

    <header>
        <nav class="menu">
          <ul>
            <li><a href="#"> </a></li>
            <li class="submenu"><a href="#">MODELOS</a>
              <ul>
                <li><a href="#">R125ㅤㅤㅤ</a></li>
                <li><a href="#">R3</a></li>
                <li><a href="#">R6 </a></li>
                <li><a href="#">R7</a></li>
                <li><a href="#">R1</a></li>
                <li><a href="#">R1M</a></li>
              </ul>
            </li>
            <li class="submenu"><a href="#">CIRCUITOS</a>
              <ul>
                <li><a href="#">MotorLand Aragón</a></li>
                <li><a href="#">Algarve International Circuit</a></li>
                <li><a href="#">Circuito de Jerez-Ángel Nieto</a></li>
              </ul>
            </li>
            <li><a href="#">MAS INFORMACIÓN</a></li>
            <li><form class="cerrarsesion" action="cerrarsesion.php" method="post" name="formulario">
                <button type="submit">CERRAR SESIÓN</button>
        </form></li>
          </ul>
        </nav>
      
        <div class="divheader">
          <h1></h1>
          <img>
        </div>
      </header>

    <div class="bienvenido">
        <?php
          
        // ESTOS SON LOS MENSAJES QUE SALDRÁN CUANDO SEA USUARIO Y CONTRASEÑA CORRECTOS
        
            echo "<h1>Bienvenido </h1>";
            session_start();
            $i = $_SESSION["login-user"];
            echo "<h1>$i !!</h1>";
            echo "<h2>Que alegría tenerte por aquí de nuevo.</h2>";
        ?>
           <img class="moto" src="./img/yamaha.png"/>
        
    </div>

    </body>
</html>