<?php

require 'functions.php';

// A class is a template for an object

class Task {
    protected $description;

    protected $completed = false;

    public function __construct($description) {
        // Automatically triggered on instantiation
        $this->description = $description;

    }

    public function complete() {
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }
}

// Instantiating our Task class as $task. $task is now an object
$task = new Task('Go to the store');

// Using the complete() method on our new task object
$task->complete();

// Using our isComplete() method on task object
var_dump($task->isComplete());
// Returns whether task is complete or not (true/ false)

