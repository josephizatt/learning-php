<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
};

function isOldEnough($age) {
    if ($age >= 21 ) {
        return true;
    }

    if ($age < 21 ) {
        return false;
    }

}