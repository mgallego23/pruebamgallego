<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link href="css.css" rel="stylesheet" type="text/css">
    <title>mgallego</title>
    </head>
    
    <body>

    <?php
    // AQUÍ, LO QUE HACE ES LA ACCIÓN DE CERRAR LA SESIÓN Y ENVIARTE AL INDEX.HTML
        session_destroy();
        header("Location: index.html")
    ?>

    </body>
</html>