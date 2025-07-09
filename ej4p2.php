<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="style.css?v=1.0">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No. Cuota</th>
                <th>Saldo Anterior</th>
                <th>Valor Cuota Fija</th>
                <th>Abono Interés</th>
                <th>Abono Capital</th>
                <th>Nuevo Saldo</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (is_numeric($_REQUEST['cedula']) && !empty($_REQUEST['nombre']) && is_numeric($_REQUEST['credito']) && is_numeric($_REQUEST['interes']) && is_numeric($_REQUEST['plazo'])) { 
            $cedula = $_REQUEST['cedula'];
            $nombre = $_REQUEST['nombre'];
            $credito = $_REQUEST['credito'];
            $interes = $_REQUEST['interes'] / 100;

            $saldoViejo = $_REQUEST['credito'];
            $cuotaFija = 0;
            $aCapital = 0;

            for ($i = 1; $i <=$_REQUEST['plazo']; $i++ ) {
                $saldoViejo -= $aCapital;

                $cuotaFija = ($credito * $interes)/(1-(1+$interes)**-$_REQUEST['plazo']);
                $aInteres = $saldoViejo * $interes;
                $aCapital = $cuotaFija - $aInteres;
                $saldoNuevo = $saldoViejo - $aCapital;
                ?>
                <tr>
                    <td> <?php echo $i ?> </td>
                    <td> <?php echo number_format($saldoViejo, 2) ?> </td>
                    <td> <?php echo number_format($cuotaFija, 2) ?> </td>
                    <td> <?php echo number_format($aInteres, 2) ?> </td>
                    <td> <?php echo number_format($aCapital, 2) ?> </td>
                    <td> <?php echo number_format($saldoNuevo, 2) ?> </td>
                </tr>
        <?php
            }
        } else {
            header("Location: ej4form.php?error=1");
            exit;
        }
        ?>
        </tbody>
    </table>
</body>
</html>