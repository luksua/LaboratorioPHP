<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if (!empty($_REQUEST['nombre']) && is_numeric($_REQUEST['peso']) && is_numeric($_REQUEST['estatura'])) {
        $IMC = $_REQUEST['peso']/($_REQUEST['estatura']**2);
        $IMC = round($IMC, 2);
        if ($IMC < 18.5){
            header("Location: ej3form.php?success=1&IMC=$IMC&nombre=$_REQUEST[nombre]");
        } elseif (18.5<=$IMC && $IMC<=24.9){
            header("Location: ej3form.php?success=2&IMC=$IMC&nombre=$_REQUEST[nombre]");
        } elseif (25<=$IMC && $IMC<=29.9){
            header("Location: ej3form.php?success=3&IMC=$IMC&nombre=$_REQUEST[nombre]");
        } elseif (30<=$IMC && $IMC<=39.9){
            header("Location: ej3form.php?success=4&IMC=$IMC&nombre=$_REQUEST[nombre]");
        } else{
            header("Location: ej3form.php?success=5&IMC=$IMC&nombre=$_REQUEST[nombre]");
        }
    } else {
        header("Location: ej3form.php?error=1");
        exit;
    }
    ?>
</body>
</html>