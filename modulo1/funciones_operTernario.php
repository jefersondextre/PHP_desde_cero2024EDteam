<?php
    $tasks = [
        [
            'title' => 'Estudiar PHP',
            'completed' => true,
        ],[
            'title' => 'Ir al supermercado',
            'completed' => false,
        ],[
            'title' => 'Hacer ejercicio',
            'completed' => true, 
        ]
    ];

echo "<h1> Mis tareas</h1>";
foreach ($tasks as $task) {
    # code...
    echo $task['title'].( $task['completed']? "✔️": "❌")."<br>\n";
}

echo " ===========  Listas separadas - completas ============= <br>";

foreach ($tasks as $task) {
    if($task['completed']){
        echo $task['title'] . ($task['completed'] ? "✔️" : "❌") . "<br>\n";
    }
}
echo " ===========  Listas separadas - incompletos  ============= <br>";

foreach ($tasks as $task) {
    if (!$task['completed']) {
        echo $task['title'] . ($task['completed'] ? "✔️" : "❌") . "<br>\n";
    }
}