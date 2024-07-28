<?php
require __DIR__.'/../functions.php';
require "Model.php";
// ===============================
class Task extends Model
{
    public $color = 'black';
    //! Declaración clasica
        // public $title;
        // public $completed;
        // public function __construct($title, $completed= false)
        // {
        //     $this->title = $title;
        //     $this->completed = $completed;
        // }
    //! Declarando con "Constructor Property Promotion" -> PHP8.0
    public function __construct( 
        public $title, 
        public $completed = false)
    {
    }
    public function complete()
    {
        $this->completed = true;
    }
    public function setColor($color){
        $this->color = $color;
    }
};
require "Exam.php";

$task=new Task("Ir al supermercado",true);
$task->save('Task-1.0.txt');

$exam = new Exam("Examen de PHP","PHP 8.0"); 
$exam->save('Exam1.0.txt');