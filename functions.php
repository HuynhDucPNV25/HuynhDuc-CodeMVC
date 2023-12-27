<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs(string $value) { 
    return $_SERVER['REQUEST_URI'] === $value;
}
