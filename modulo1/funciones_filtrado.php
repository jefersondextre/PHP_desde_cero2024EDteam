<?php
$tasks = [
    [
        'title' => 'Estudiar PHP',
        'completed' => true,
    ], [
        'title' => 'Ir al supermercado',
        'completed' => false,
    ], [
        'title' => 'Hacer ejercicio',
        'completed' => true,
    ]
];

echo "<h1> Mis tareas</h1>";
foreach ($tasks as $task) {
    # code...
    echo $task['title'] . ($task['completed'] ? "✔️" : "❌") . "<br>\n";
}

echo " =========== <h3> Listas separadas - completas </h3>  ============= <br>";
$completedTasks = array_filter($tasks, function ($task) {
    return $task['completed'];
});

$pendingTasks = array_filter($tasks, function($task) {
    return !$task['completed'];
});

foreach ($completedTasks as $task) {
        echo $task['title'] . "✔️ <br>\n";
}
echo " ===========  <h3>Listas separadas - incompletos </h3>  ============= <br>";

foreach ($pendingTasks as $task) {
            echo $task['title']."❌ <br>\n";
}



