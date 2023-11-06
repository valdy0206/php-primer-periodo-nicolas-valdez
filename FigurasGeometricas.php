<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras Geométricas - PHP</title>
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
            <h1>Área Figuras Geométricas</h1>
            <h2>con PHP</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-20.59,49.84 C91.70,125.83 299.94,-37.97 525.67,66.61 L526.24,176.16 L-22.29,152.47 Z" style="stroke: none; fill: #fff;"></path>
            </svg>
        </div>
    </header>

    <center>
        <h2>Calculadora de Áreas</h2>
        <br>
        <p><h3>Para cuadrado y rectangulo: lado 1 y lado 2</h3></p>
        <p><h3>Para triángulo: base y altura</h3></p>
        <p><h3>Para circulo: radio</h3></p>
        <br><br>
        <form action="FigurasGeometricas.php" method="POST">
            <label for="figura">Selecciona la figura:</label>
            <select name="figura" id="figura">
                <option value="cuadrado">Cuadrado</option>
                <option value="rectangulo">Rectángulo</option>
                <option value="triangulo">Triángulo</option>
                <option value="circulo">Círculo</option>
            </select>
            <br><br>
            <label for="lado1">Lado 1:</label>
            <input type="text" name="lado1" id="lado1">
            <br><br>
            <label for="lado2" id="lado2-label">Lado 2:</label>
            <input type="text" name="lado2" id="lado2">
            <br><br>
            <!-- Agrega campos para base y altura del triángulo -->
            <label for="base" id="base-label">Base:</label>
            <input type="text" name="base" id="base">
            <br><br>
            <label for="altura" id="altura-label">Altura:</label>
            <input type="text" name="altura" id="altura">
            <br><br>
            <!-- Agrega campo para el radio del círculo -->
            <label for="radio" id="radio-label">Radio:</label>
            <input type="text" name="radio" id="radio">
            <br><br>
            <input class="button-87" type="submit" value="Calcular">
            <br><br>
        </form>
    </center>
    <center>
        <?php
        if ($_POST) {
            $figura = $_POST['figura'];

            switch ($figura) {
                case 'cuadrado':
                    $lado1 = $_POST['lado1'];
                    $area = $lado1 * $lado1;
                    break;
                case 'rectangulo':
                    $lado1 = $_POST['lado1'];
                    $lado2 = $_POST['lado2'];
                    $area = $lado1 * $lado2;
                    break;
                case 'triangulo':
                    $base = $_POST['base'];
                    $altura = $_POST['altura'];
                    $area = (0.5) * $base * $altura;
                    break;
                case 'circulo':
                    $radio = $_POST['radio'];
                    $area = 3.14159265359 * ($radio * $radio);
                    break;
                default:
                    $area = "Figura no válida";
            }

            echo "<p>El área de la figura es: $area</p>";
        }
        ?>
        <br><br><br>

    </center>

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

</body>

</html>
