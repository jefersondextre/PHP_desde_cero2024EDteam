<?php
$names = [
    'David de Gea',
    'Lisandro Martinez',
    'Bruno Gernandez',
    'Cristiano Ronaldo',
    'Marcus Rashford',
];
$itemsNumber = count($names);
// die(var_dump($itemsNumber));

// For
for ($i=0; $i < $itemsNumber ; $i++) { 
    # code...
    echo $names[$i]."\n"."<br>";
}
echo "============== completo ========= <br>";
// For each
foreach ($names as $i => $value) {
    # code...
    echo "0$i.-".$value . "\n" . "<br>";
}
echo "============ sin key =========== <br>";
foreach ($names as $value) {
    # code...
    echo $value . "\n" . "<br>";
}
echo "======================= <br>";

$others_players = [
    [
        'name' => 'Cristiano Ronaldo',
        'age' => 37,
        'country' => 'Portugal',
        'position' => 'striker'
    ], [
        'name' => 'David de Gea',
        'age' => 31,
        'country' => 'España',
        'position' => 'goalkeeper',
    ]
];
foreach ($others_players as $player) {
    # code...
    echo "Nombre: $player[name] <br> \n ".
    "Edad: $player[age] <br>\n".
    "posicion: $player[position] <br>\n";
}