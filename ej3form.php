<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cuadro3">
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo "<p style='color: red;'>Valores no validos. Digite nuevamente</p>";
            }
            if (isset($_GET['success']) && $_GET['success'] == 1) {
                echo "<p style='color: red;'>$_GET[nombre], su IMC es de $_GET[IMC]. Usted se encuentra por debajo del peso deseado</p>";
            }
            if (isset($_GET['success']) && $_GET['success'] == 2) {
                echo "<p style='color: green;'>$_GET[nombre], su IMC es de $_GET[IMC]. Usted se encuentra en un peso saludable</p>";
            }
            if (isset($_GET['success']) && $_GET['success'] == 3) {
                echo "<p style='color:rgb(242, 123, 12);'>$_GET[nombre], su IMC es de $_GET[IMC]. Usted se encuentra con sobrepeso</p>";
            }
            if (isset($_GET['success']) && $_GET['success'] == 4) {
                echo "<p style='color: red;'>$_GET[nombre], su IMC es de $_GET[IMC]. Usted se encuentra con obesida</p>";
            }
            if (isset($_GET['success']) && $_GET['success'] == 5) {
                echo "<p style='color: red;'>$_GET[nombre], su IMC es de $_GET[IMC]. Usted se encuentra con obesida mórbida</p>";
            }
        ?>
        <div class="formulario">
            <form action="ej3p2.php" method="post">
                <div class="c">
                    <label for="">Nombre del paciente:</label>
                    <input type="text" name="nombre"><br><br>
                </div>
                <div class="c">
                    <label for="">Peso en kilogramos:</label>
                    <input type="number" name="peso" step="0.01"><br><br>
                </div>
                <div class="c">
                    <label for="">Estatura en metros:</label>
                    <input type="number" name="estatura" step="0.01"><br><br>
                </div>
                <div class="c">
                    <label for=""></label>
                    <input type="submit" name="Enviar">
                </div>
            </form>
        </div>
    </div>
</body>