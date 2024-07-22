
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require 'functions.php';
require "./models/Task.php";

// Definicion basica de como se crea una instancia de la clase.
// $task = new Task('Estudiar Python',true);
// $task ->complete();
// dd($task);

    $greeting = "Hola mundo";

        $tasks = [
            // Named parameters
            new Task(completed: true,title:"Estudiar PHP"),
            new Task('Ir al supermercado'),
            new Task('Hacer ejercicio', true),
            // [
            //     'title' => 'Estudiar PHP',
            //     'completed' => true,
            // ], [
            //     'title' => 'Ir al supermercado',
            //     'completed' => false,
            // ], [
            //     'title' => 'Hacer ejercicio',
            //     'completed' => true,
            // ]
        ];
        $completedTasks = array_filter($tasks, function ($task) {
            return $task->completed;
        });

        $pendingTasks = array_filter($tasks, function ($task) {
            return !$task -> completed;
        });
        require 'index.view.php';
        // dd($pendingTasks);
        // dd($language);
