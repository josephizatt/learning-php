<?php
// Function to dump and die
// Add pre tags to format the output in a browser
function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
};

// Function to check age
// If age is greater than or equal to 21, return true
// If age is less than 21, return false
function isOldEnough($age) {
    if ($age >= 21 ) {
        return true;
    }

    if ($age < 21 ) {
        return false;
    }

}