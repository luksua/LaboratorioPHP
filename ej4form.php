<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cuadro4">
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo "<p style='color: red;'>Ingrese todos los datos</p>";
            }
        ?>
        <div class="formulario">
            <form action="ej4p2.php" method="post">
                <div class="d">
                    <label for="">Cédula del cliente:</label>
                    <input type="number" name="cedula"><br><br>
                </div>
                <div class="d">
                    <label for="">Nombre del cliente:</label>
                    <input type="text" name="nombre"><br><br>
                </div>
                <div class="d">
                    <label for="">Monto del crédito:</label>
                    <input type="number" name="credito"><br><br>
                </div>
                <div class="d">
                    <label for="">Tasa de interés mensual %:</label>
                    <input type="number" name="interes" step="0.01"><br><br>
                </div>
                <div class="d">
                    <label for="">Plazo en meses:</label>
                    <input type="number" name="plazo"><br><br>
                </div>
                <div class="d">
                    <label for=""></label>
                    <input type="submit" name="Enviar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>