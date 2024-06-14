<?php

//PRENDO IL FILE JSON
$fileContent = file_get_contents("store.json");

// NON ENTRA NELL'IF MA SE LO TOLGO FUNZIONA MA NON MI LEGGE L'INDICE DELL'ARRA DELETE
if (isset($_POST["indexDeleteElement"])) {
    //FACCIO IN MODO CHE PHP LO POSSA LEGGERE NEL SUO LINGUAGGIO
    $toDoList = json_decode($fileContent, true);

    // CREAZIONE OGGETTO DA PUSHARE
    $indexDelete = [
        // ASSOCIO IL "TASK" CON QUELLO NEL MAIN.JS COSì CHE SI POSSA LEGGERE
        "number" => $_POST["delete"],
    ];
    array_splice($toDoList, $indexDelete["number"], 1);
    //RICONVERTO L'ARRAY IN LINGUAGGIO JSON
    $fileContent = json_encode($toDoList);

    //STAMPO L'ARRAY NEL FILE STORE
    file_put_contents("store.json", $fileContent);
} else {
    echo "non entro nell'if";
}

// DICO CHE IL FILE SUCCESSIVO è UN FILE JSON
header('Content-Type: application/json');
//STAMPO IN PAGINE PHP L'ARRAY
echo $fileContent;
