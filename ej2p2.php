<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if (!empty($_REQUEST['nombre']) && is_numeric($_REQUEST['cantidad']) && is_numeric($_REQUEST['precioTotal'])) {
        $salario = 737000;
        for ($i=1; $i<=$_REQUEST['cantidad']; $i++){
            $salario = $salario + 50000;
        }
        $salarioTotal = $salario + ($_REQUEST['precioTotal'] * 0.05);
    ?>
        <div class="cuadro2">
            <label for="">El nombre del vendedor es <?php echo $_REQUEST['nombre']?></label><br>
            <label for="">Tiene un salario total de <?php echo $salarioTotal?>, contando con las comisiones.</label><br>
            <label for="">Ha vendido un total de <?php echo $_REQUEST['cantidad']?> automoviles.</label>
        </div>
    <?php
    } else {
        header("Location: ej2form.php?error=1");
        exit;
    }
    ?>
</body>
</html>