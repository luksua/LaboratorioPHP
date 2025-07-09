<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cuadro letra1">
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo "<p style='color: red;'>Valores no validos. Digite nuevamente</p>";
            }
            if (isset($_GET['success']) && $_GET['success'] == 1) {
                echo "<p style='color: green;'>Su nota final es: '$_GET[notaFinal]'. Aprobó!</p>";
            }
            if (isset($_GET['success']) && $_GET['success'] == 2) {
                echo "<p style='color: red;'>Su nota final es: '$_GET[notaFinal]'. No Aprobó!</p>";
            }
        ?>
        <div class="formulario">
            <form action="ej1p2.php" method="post">
                <div class="a">
                    <label for="">Parcial 1:</label>
                    <input type="number" name="parcial1" step="0.01"><br><br>
                </div>
                <div class="a">
                    <label for="">Parcial 2:</label>
                    <input type="number" name="parcial2" step="0.01"><br><br>
                </div>
                <div class="a">
                    <label for="">Parcial 3:</label>
                    <input type="number" name="parcial3" step="0.01"><br><br>
                </div>
                <div class="a">
                    <label for="">Examen final:</label>
                    <input type="number" name="exfinal" step="0.01"><br><br>
                </div>
                <div class="a">
                    <label for="">Trabajo final:</label>
                    <input type="number" name="tfinal" step="0.01"><br><br>
                </div>
                <div class="a">
                    <label for=""></label>
                    <input type="submit" name="Enviar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>