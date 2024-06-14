<?php

$toDoList = file_get_contents("store.json");

// DICO CHE IL CONTENUTO SUCCESSIVO è UN FILE JSON
header('Content-Type: application/json');

// STAMPO SUL FILE PHP IL CONTENUTO DI STORE
echo $toDoList;
