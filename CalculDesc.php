<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de descuento</title>
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
            <h1>CALCULA EL DESCUENTO</h1>
            <h2>con PHP</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-20.59,49.84 C91.70,125.83 299.94,-37.97 525.67,66.61 L526.24,176.16 L-22.29,152.47 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <center>
        <form method="post">
            <br><br>
            <label for="monto">Ingrese el monto total de la compra</label>
            <br><br>
            <input type="text" name="monto" id="monto">
            <br><br>
            <input class="button-87" type="submit" value="Calcular">
        </form>
    </center>

</body>
<center>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
            $monto = $_POST["monto"];
                $total = $monto;
                
                if($monto>= 100){
                    $total=$total-(($monto*10)/100);
                    echo "El descuento es de el 10%, el precio es de $$monto  y con el descuento es de $$total"  ;
                } elseif ($monto>= 50 && $monto<100){
                    $total=$total-(($monto*5)/100);
                    echo "El descuento es de el 5%, el precio es de $$monto  y con el descuento es de $$total"  ;
                } elseif ($monto< 50){
                    echo "No hay descuento aplicado, total: $monto"  ;
                }
            }
            ?>
</center>
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