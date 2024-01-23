<?php
// Inicializar la solicitud cURL
$ch = curl_init('https://apimocha.com/alumnoscampusfp/alumnos');

// Configurar las opciones de la solicitud
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Realizar la solicitud y obtener la respuesta
$response = curl_exec($ch);

// Cerrar la solicitud
curl_close($ch);

// Manejar la respuesta (por ejemplo, convertirla a un array asociativo si la respuesta es JSON)
$data = json_decode($response, true);

// Hacer algo con los datos, por ejemplo, imprimirlos
print_r($data);
?>