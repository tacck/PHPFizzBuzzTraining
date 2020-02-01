<?php
namespace App\FizzBuzz;

use App\FizzBuzz\FizzBuzzTypes;
use App\FizzBuzz\FizzBuzzPresenterInterface;

class FizzBuzzPresenterBuilder
{
    public static function build(int $num): FizzBuzzTypes
    {
        // foreach (glob(__DIR__ . '/Presenter/Dynamic/*.php') as $file) {
        //     require_once $file;
        //     $class = '\App\FizzBuzz\Presenter\Dynamic\\' . basename($file, '.php');
        //     $presenter = new $class($num);
        //     return $presenter;
        // }

        return new FizzBuzzTypes($num);

        // return new \App\FizzBuzz\Presenter\NumberPresenter($num);
    }
}
