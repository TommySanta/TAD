<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris Jokes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        #joke-container {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
        }
        #load-joke-btn {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div id="joke-container">
    <h1>Lista de alumnos</h1>
    <p id="joke-text">Presiona el botón para obtener los alumnos</p>
    <button id="load-joke-btn">Cargar Chiste</button>
</div>

<script>
    document.getElementById('load-joke-btn').addEventListener('click', function () {
        fetch('https://apimocha.com/alumnoscampusfp/alumnos')
            .then(response => response.json())
            .then(data => {
                // Mostrar el chiste en la página
                document.getElementById('joke-text').innerText = data.value;
            })
            .catch(error => {
                console.error('Error al obtener el chiste:', error);
            });
    });
</script>

</body>
</html>
