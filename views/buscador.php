<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buscador</h1>
    <div id="searchContainer">
        <input type="text" id='inputBuscar'>
        <button id="btn" onclick="enviar_solicitud()">Buscar</button>
    </div>

    <div id="resultados" style="background-color: silver;"></div>


    <script src="../assets/ajax.js"></script>
</body>
</html>