<?php
require __DIR__.'/../functions.php';
require "Model.php";
// ===============================
class Task extends Model
{
    public $color = 'black';
    //? Declaración clasica
        // public $title;
        // public $completed;
        // public function __construct($title, $completed= false)
        // {
        //     $this->title = $title;
        //     $this->completed = $completed;
        // }
    //? Declarando con "Constructor Property Promotion" -> PHP8.0
    // public function __construct( 
        //! ** tenemos un constructor que espera un parametro obligatorio
        //! Vemos que PDO no usa este constructor para crear el objeto, por esto debemos solu_
        //! cionar parcialmente añadiendo una cadena vacia al atributo $title,
        //! 2do. PDO mediante procesos internos establece todos los valores de las propiedades
        //!  del objeto en primer lugar y despues instancia la clase llamando al constructor
        //! pero como le pusimos texto vacio este hace que 
        //! no se muestre ningun dato sobreescribiendo lo antes definido. Para solucionar esto
        // ! facilmente en primer metodo rapido es 
        //! comentar este constructor.. para que no sobreescriba los atributos vacios.
        // public $title = '', 
        // public $completed = false)
    // {
    // }
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