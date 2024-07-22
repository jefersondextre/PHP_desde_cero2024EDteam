<?php
require __DIR__.'/../functions.php';
class Model{
    public function buildString()
    {
    //Video 2.4 Reflection permite inspeccionar caracteristicas de una clase en tiempo de ejecucion.
        $me = new ReflectionClass($this);
        // dd($me->getProperties());
        $properties=$me-> getProperties();
        $string="";
    foreach ($properties as $property) {
        // dd( $property->name);

        $propertyName=$property->name;
        $propertyValue= "{$this->$propertyName}\n";
        // $this->$propertyName;
        // $this->title; 
        $string = $string."{$propertyName}:".(is_bool($propertyValue)? var_export($propertyValue,true):$propertyValue)." \n";
    }
    
    // Contruyendo cadena que exporta el archivo creado en la function save($name)
        // return "Título: {$this->title}\n" .
        //     "Completo:" . ($this->completed ? 'Si' : 'No');
        return $string;
    }

    public function save($name=null)
    {
        if(is_null($name)){
            $me = new ReflectionClass($this);
            $filename = $me-> getName();
            // dd($filename);
            $name= lcfirst($filename).".txt";
        }

        $file = fopen($name, 'w');
        fwrite($file, $this->buildString());
        fclose($file);
    }

}
// ===============================
class Task extends Model
{
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

};

class Exam extends Model {
    public function __construct(
        public $topic,
        public $info,
        public $completed = false
    ){}

}

$task=new Task("Ir al supermercado",true);
$task->save('Task-1.0');

$exam = new Exam("Examen de PHP","PHP 8.0"); 
$exam->save('Exam1.0.txt');