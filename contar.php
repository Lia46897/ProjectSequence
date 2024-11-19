<?php
// TODO Laia
require_once 'fn-php/fnComandes.php';

use proven\functComandes as comandes;
use function proven\functComandes\countNucleotides;

// Obtiene la secuencia del request POST
$sec = $_POST['secuencia'];

// Llama a la función y devuelve el resultado en formato JSON
header('Content-Type: application/json');
echo json_encode(countNucleotides($sec));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <input type="text" id="secuencia" placeholder="Ingrese la secuencia">
        <button id="contar">Count</button>
        <div id="result"></div>
    </div>
<script>
    document.getElementById('contar').addEventListener('click', function() {
        const secuencia = document.getElementById('secuencia').value;
        fetch('contar.php', {
            method: 'POST',
            body: JSON.stringify({ secuencia: secuencia })
        })
        .then(response => response.json())
        .then(data => {
            // Mostrar los resultados en el elemento con id "resultado"
            let html = '';
            for (const nucleotid in data) {
                html += `${nucleotid}: ${data[nucleotid]}<br>`;
            }
            document.getElementById('reult').innerHTML = html;
        });
    });
</script>
</body>
</html>