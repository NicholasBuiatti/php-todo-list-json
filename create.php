<?php

//PRENDO IL FILE JSON
$fileContent = file_get_contents("store.json");

//FACCIO IN MODO CHE PHP LO POSSA LEGGERE NEL SUO LINGUAGGIO
$toDoList = json_decode($fileContent, true);

// CREAZIONE OGGETTO DA PUSHARE
$newTask = [
    // ASSOCIO IL "TASK" CON QUELLO NEL MAIN.JS COSì CHE SI POSSA LEGGERE
    "toDo" => $_POST["task"],
    "checked" => true,
];

//PUSHO L'OGGETTO NELL'ARRAY
$toDoList[] = $newTask;

//RICONVERTO L'ARRAY IN LINGUAGGIO JSON
$fileContent = json_encode($toDoList);

//STAMPO L'ARRAY NEL FILE STORE
file_put_contents("store.json", $fileContent);

// DICO CHE IL FILE SUCCESSIVO è UN FILE JSON
header('Content-Type: application/json');

//STAMPO IN PAGINE PHP L'ARRAY
echo $fileContent;
