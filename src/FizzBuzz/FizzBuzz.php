<?php
namespace App\FizzBuzz;

class FizzBuzz
{
    public function getFizzBuzz(int $num): string
    {
        if ($num % 3 === 0 && $num % 5 === 0) {
            return 'FizzBuzz';
        } elseif ($num % 3 === 0 && $num % 5 !== 0) {
            return 'Fizz';
        } elseif ($num % 3 !== 0 && $num % 5 === 0) {
            return 'Buzz';
        } else {
            return "$num";
        }
    }
}
