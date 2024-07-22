
<?php
require 'functions.php';
    $greeting = "Hola mundo";
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
        $completedTasks = array_filter($tasks, function ($task) {
            return $task['completed'];
        });

        $pendingTasks = array_filter($tasks, function ($task) {
            return !$task['completed'];
        });
        require 'index.view.php';
        dd($pendingTasks);
        // dd($language);
