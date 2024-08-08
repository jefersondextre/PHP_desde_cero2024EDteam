<?php
class Model
{
    public function buildString(){
        //Video 2.4 Reflection permite inspeccionar caracteristicas de una clase en tiempo de ejecucion.
        $me = new ReflectionClass($this);
        // dd($me->getProperties());
        $properties = $me->getProperties();
        $string = "";
        foreach ($properties as $property) {
            // dd( $property->name);

            $propertyName = $property->name;
            $propertyValue = "{$this->$propertyName}\n";
            // $this->$propertyName;
            // $this->title; 
            $string = $string . "{$propertyName}:".(is_bool($propertyValue) ? var_export($propertyValue, true) : $propertyValue) . " \n";
        }

        // Contruyendo cadena que exporta el archivo creado en la function save($name)
        // return "Título: {$this->title}\n" .
        //     "Completo:" . ($this->completed ? 'Si' : 'No');
        return $string;
    }

    public function save($name = null){
        if (is_null($name)) {
            $me = new ReflectionClass($this);
            $filename = $me->getName();
            // dd($filename);
            $name = lcfirst($filename) . ".txt";
        }

        $file = fopen($name, 'w');
        fwrite($file, $this->buildString());
        fclose($file);
    }
}