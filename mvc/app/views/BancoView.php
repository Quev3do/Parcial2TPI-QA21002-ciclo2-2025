<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$title?> </title>
</head>
<body>
    <p><h1>SIMULADORA</h1> <h5>de</h5> <h1>CREDITO</h1></p>
    <br>
    <form action="enviar" method="post">
        Nombre: <input type="text" name="name" id="name"><br>
        E-mail: <input type="email" name="email" id="email"><br>
        DUI: <input type="text" name="dui" id="dui"><br>
        Capital: <input type="number" name="capital" id="capital" step="0.01"><br>
        Interes: <input type="number" name="interes" id="interes" step="0.01"><br>
        Cuotas: <input type="number" name="cuotas" id="cuotas" step>
        <br><button type="submit">Enviar todo</button>
    </form>
</body>
</html>