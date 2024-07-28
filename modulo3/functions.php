<?php
$language = 'PHP';
function dd($value){

    return die( 
        var_dump($value)       
    );
}

function dbConnect()
{
    try {
        return new PDO('mysql:host=localhost;dbname=todos', 'root', '');
    } catch (PDOException $error) {
        die($error->getMessage());
    };
}

function getAllTasks($pdo)
{
    $query = $pdo->prepare("SELECT * FROM `tasks`");
    $query->execute();
    //? PDO devuelve el array como indexado y asociativo. Para evitar este comportamiento
    //? le decimos que unicamente se recupere como un array asociativo(Objeto de tipo stdClass) PDO::FETCH_OBJ.
    // dd($query->fetchAll());
    //? Array de objetos 
    $tasks = $query->fetchAll(PDO::FETCH_OBJ);
    // dd($query -> fetchAll(PDO::FETCH_OBJ)); 

}