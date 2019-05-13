<?php

// Checkout this file
require 'functions.php';

$animals = [
    'dog',
    'cat',
    'leopard',
    'fish'
];

// dd($animals);

// Using our function in an if statement
if (isOldEnough(20)) {
    echo 'You are allowed in';

}

else {
    echo 'You are not old enough';
}
