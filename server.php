<?php

$toDoList = [
    [
        'toDo' => 'Fare la spesa',
        'checked' => 'true'
    ],
    [
        'toDo' => 'Pulire Casa',
        'checked' => 'true'
    ],
    [
        'toDo' => 'Rifare il letto',
        'checked' => 'false'
    ],
];

header('Content-Type: application/json');
// TRASFORMO IL CONTENUTO IN UN FILE STRINGA CHE SI RIESCE A LEGGERE ANCHE IN ALTRI LINGUAGGI
echo json_encode($toDoList);
