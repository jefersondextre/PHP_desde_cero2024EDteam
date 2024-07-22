<?php

$players = [
    'goalkeeper' => ['David de Gea','Tom Heaton','Matej Kovar'],
    'defender' => ['Lisandro Martinez','Raphael Varane','Tyrell Malacia','Harry Maguire','Diogo Dalot','Luke Shaw'],
    'midfielder' => ['Bruno Gernandez','Scott McTominay','Casemiro','Donny van de Beek'],
    'Striker' => ['Cristiano Ronaldo','Marcus rashford','Antony','Jadon Sancho'],
];

var_dump($players);
var_dump($players['defender'][2]);

$others_players=[
    [
        'name'=>'Cristiano Ronaldo',
        'age'=> 37,
        'country'=> 'Portugal',
        'position'=> 'striker'
    ],[
        'name' => 'David de Gea',
        'age' => 31,
        'country' => 'España',
        'position' => 'goalkeeper',
    ]
];
var_dump($others_players);
var_dump($others_players[1]['name']);
var_dump($others_players[1]['country']);