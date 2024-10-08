
<?php
//
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
// cuando llames a functions desde Task comenta esta llamada

// require 'functions.php';
require "./models/Task.php";
require 'Enums/ColorEnums.php';

// Definicion basica de como se crea una instancia de la clase.
// $task = new Task('Estudiar Python',true);
// $task ->complete();
// dd($task);

    $greeting = "Hola mundo";
 // Named parameters
        $tasks = [
            new Task(completed: true, title:"Estudiar PHP"),
            new Task('Ir al supermercado',true),
            new Task('Hacer ejercicio', true),
            new Task('Salir a correr', false),

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

        /**
         * PHP8.1 -> Clases de tipo Enums es un string que toma su valor de un 
         * grupo de datos ya establecido
         */
        $tasks[0]->setColor(ColorsEnum::BLUE->name);
        $tasks[1]->setColor(ColorsEnum::GREEN->name);
        $tasks[2]->setColor(ColorsEnum::RED->name);
        $tasks[3]->setColor(ColorsEnum::ORANGE->name);



        $completedTasks = array_filter($tasks, function ($task) {
            return $task->completed;
        });

        $pendingTasks = array_filter($tasks, function ($task) {
            return !$task -> completed;
        });
        require 'index.view.php';
        // dd($pendingTasks);
        // dd($language);

   