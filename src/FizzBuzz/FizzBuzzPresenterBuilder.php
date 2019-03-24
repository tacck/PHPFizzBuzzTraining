<?php
namespace App\FizzBuzz;

use App\FizzBuzz\FizzBuzzPresenterInterface;

class FizzBuzzPresenterBuilder
{
    public static function build(int $num): FizzBuzzPresenterInterface
    {
        if ($num % 3 === 0 && $num % 5 === 0) {
            return new \App\FizzBuzz\Presenter\FizzBuzzPresenter($num);
        } else if ($num % 3 === 0 && $num % 5 !== 0) {
            return new \App\FizzBuzz\Presenter\FizzPresenter($num);
        } else if ($num % 3 !== 0 && $num % 5 === 0) {
            return new \App\FizzBuzz\Presenter\BuzzPresenter($num);
        } else {
            return new \App\FizzBuzz\Presenter\NumberPresenter($num);
        }
    }
}