<?php

$toDoList = [
    [
        'toDo' => 'Fare la spesa',
        'chacked' => 'true'
    ],
    [
        'toDo' => 'Pulire Casa',
        'chacked' => 'true'
    ],
    [
        'toDo' => 'Rifare il letto',
        'chacked' => 'false'
    ],
];

header('Content-Type: application/json');
// TRASFORMO IL CONTENUTO IN UN FILE STRINGA CHE SI RIESCE A LEGGERE ANCHE IN ALTRI LINGUAGGI
echo json_encode($toDoList);
