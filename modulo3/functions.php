<?php
$language = 'PHP';
function dd($value){

    return die( 
        var_dump($value)       
    );
}


function getAllTasks($pdo)
{
    $query = $pdo->prepare("SELECT * FROM `tasks`");
    $query->execute();
    //? PDO devuelve el array como indexado y asociativo. Para evitar este comportamiento
    //? le decimos que unicamente se recupere como un array asociativo(Objeto de tipo stdClass) PDO::FETCH_OBJ.
    // dd($query->fetchAll());
    //? Array de objetos 
    //! Creando objetos de tipo standarClass std
    // $tasks = $query->fetchAll(PDO::FETCH_OBJ);
    // dd($query -> fetchAll(PDO::FETCH_OBJ));
    // ! Para evitar que haga uso no del modelo de PDO, sino que haga uso 
    // ! de nuestra clase creada, haremos uso de FETCH_CLASS y Le indicamos la clase.
    //! Iremos a la calse Task para modificar los parametros **
        return $query->fetchAll(PDO::FETCH_CLASS,'Task');

}