<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Name: <?=$name?></h1>
    <h1>Email: <?=$email?></h1>
    <table>
        <thead>
            <tr>
                <th>Mes</th>
                <th>Cuota</th>
                <th>Saldo pendiente</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < count($pago); $i++){ ?>
                <tr>
                    <td><?=$i;?></td>
                    <td><?=$pago[$i];?></td>
                    <td><?=($capital - $pago[$i]);?></td>
                </tr>
            <?=}?>
        </tbody>
    </table>
</body>
</html>