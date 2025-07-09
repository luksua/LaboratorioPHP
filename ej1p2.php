<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    if (is_numeric($_REQUEST['parcial1']) && is_numeric($_REQUEST['parcial2']) && is_numeric($_REQUEST['parcial3']) && is_numeric($_REQUEST['exfinal']) && is_numeric($_REQUEST['tfinal'])) {
        $tparciales = ($_REQUEST['parcial1'] + $_REQUEST['parcial2'] + $_REQUEST['parcial3'])/3;
        $tparciales = $tparciales * 0.35;
        $examenFinal = $_REQUEST['exfinal'] * 0.35;
        $trabajoFinal = $_REQUEST['tfinal'] * 0.3;
        $notaFinal = $tparciales + $examenFinal + $trabajoFinal;
        $notaFinal = round($notaFinal, 2);

        if ($notaFinal >= 3){
            header("Location: ej1form.php?success=1&notaFinal=$notaFinal");
        } else{
            header("Location: ej1form.php?success=2&notaFinal=$notaFinal");
        }
    } else {
        header("Location: ej1form.php?error=1");
        exit;
    }
    ?>
</body>
</html>