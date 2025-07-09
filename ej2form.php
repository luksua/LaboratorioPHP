<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cuadro2">
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo "<p style='color: white;'>Valores no validos. Digite nuevamente</p>";
            }
        ?>
        <div class="formulario">
            <form action="ej2p2.php" method="post">
                <div class="b">
                    <label for="">Nombre del vendedor:</label>
                    <input type="text" name="nombre"><br><br>
                </div>
                <div class="b">
                    <label for="">Cantidad automoviles vendidos:</label>
                    <input type="number" name="cantidad"><br><br>
                </div>
                <div class="b">
                    <label for="">Precio total automoviles vendidos:</label>
                    <input type="number" name="precioTotal"><br><br>
                </div>
                <div class="b">
                    <label for=""></label>
                    <input type="submit" name="Enviar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>