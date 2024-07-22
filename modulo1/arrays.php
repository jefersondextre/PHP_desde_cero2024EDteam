<?php
// Arrays
// Grupos de datos
$name = 'Jairo';
// Arrays indexado
$names = [
    'Luis',
    'Susan',
    'Doménica',
    'Chelsea',
];
var_dump($names);

$ages = [22,19,21,25];
var_dump($ages);

echo $ages[0]."\n";

// Arrays asociativos
$players = [
    'goalkeeper' => 'David de Gea',
    'defender' => 'Lisandro Martinez',
    'midfielder' => 'Bruno Gernandez',
    'Striker' => 'Cristiano Ronaldo',
];

var_dump($players);

echo $players['Striker']."\n";