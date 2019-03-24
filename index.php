<?php

for ($num = 1; $num <= 100; $num++) {
    if ($num % 3 === 0 && $num % 5 === 0) {
        echo 'FizzBuzz' . PHP_EOL;
    } else if ($num % 3 === 0 && $num % 5 !== 0) {
        echo 'Fizz' . PHP_EOL;
    } else if ($num % 3 !== 0 && $num % 5 === 0) {
        echo 'Buzz' . PHP_EOL;
    } else {
        echo "$num" . PHP_EOL;
    }
}
