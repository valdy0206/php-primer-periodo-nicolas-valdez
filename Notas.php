<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Definitiva - PHP</title>
    <link rel="shortcut icon" href="imagenes/php (1).png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <a href="principal.php">  inicio  </a>
            <a href="Ejercicios.php">  Ejemplos PHP  </a>
        </nav>
        <section class="textos-header">
            <h1>Nota Definitiva</h1>
            <h2>con PHP</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-20.59,49.84 C91.70,125.83 299.94,-37.97 525.67,66.61 L526.24,176.16 L-22.29,152.47 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>   
<center>

    <h2>Nota Definitiva</h2>
    <form action="Notas.php" method="POST">
        <table>
            <br>
                <label for="nota1">Nota 1</label>
                <input type="text" name="nota1"></td>
            </br>
            <br>
                <label for="nota2">Nota 2</label>
                <input type="text" name="nota2"></td>
            </br>
            <br>
                <label for="nota3">Nota 3</label>
                <input type="text" name="nota3"></td>
            </br>
            <br>
                <td><input class="button-87" type="submit" value="Definitiva"></td>
            </br>
        </table>
    </form>
</center>
    
    <center>
        <?php
        if($_POST)
        {
            $nota1 = $_POST
            ['nota1'];
            $nota2 = $_POST
            ['nota2'];
            $nota3 = $_POST
            ['nota3'];
            $definitiva = ($nota1+$nota2+$nota3) / 3;
            echo "<p>La nota definitiva es $definitiva</p>";
        }

        ?>
    </center>

</body>

<br><br><br>

<footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Nicolas Valdez Manrique</h4>
                <p>Comfandi Miraflores</p>
                <p>Grado 11-2</p>
                <p>9-Noviembre-2023</p>
            </div>
        </div>
    </footer>

</html>