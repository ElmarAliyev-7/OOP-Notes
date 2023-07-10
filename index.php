<?php

spl_autoload_register(function ($class_name) {
    include 'Main\\' . $class_name . '.php';
});

$bmw = new BMW();
echo $bmw->drive();