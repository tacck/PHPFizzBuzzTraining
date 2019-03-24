<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\FizzBuzz\FizzBuzzPresenterBuilder;

for ($num = 1; $num <= 100; $num++) {
    echo FizzBuzzPresenterBuilder::build($num) . PHP_EOL;
}
