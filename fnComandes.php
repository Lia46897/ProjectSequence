<?php

namespace proven\functComandes;

function countNucleotides(string $seq): array {
    // Inicializamos un array asociativo para contar los nucleótidos
    $conteo = [
        'A' => 0,
        'T' => 0,
        'C' => 0,
        'G' => 0,
        'U' => 0
    ];

    // Convertimos la seq a mayúsculas para una comparación más sencilla
    $seq = strtoupper($seq);

    // Iteramos sobre cada nucleótido de la seq
    foreach (str_split($seq) as $nucleotido) {
        if (isset($conteo[$nucleotido])) {
            $conteo[$nucleotido]++;
        }
    }

    return $conteo;
}