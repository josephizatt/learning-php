<?php

// An associative array has key value pairs
$person = [
    'age' => 20,
    'hairColor' => 'orange',
    'gender' => 'male'
];

// Adding an item to the array
// Key = Value
$person['name'] = 'Joe';

var_dump($person);


$task = [
    'title' => 'Wash dishes',
    'due' => '12/05/2018',
    'assigned_to' => 'Joe',
    'completed' => false
];

var_dump($task);

if($task['completed'] == false) {
    echo "Task '$task[title]' not completed";
}




require 'index.view.php';