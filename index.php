<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\FizzBuzz\FizzBuzz;

$fizzBuzz = new FizzBuzz();
for ($num = 1; $num <= 100; $num++) {
    echo $fizzBuzz->getFizzBuzz($num) . PHP_EOL;
}
