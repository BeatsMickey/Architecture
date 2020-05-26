<?php

spl_autoload_register(function ($classname) {
    include_once ($classname.'.php');
});

echo (new Square())->squareArea(4).PHP_EOL;
echo (new Circle())->circleArea(2);