<?php

$toDoList = file_get_contents("store.json");

header('Content-Type: application/json');

echo $toDoList;
