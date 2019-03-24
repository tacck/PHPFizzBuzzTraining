<?php
namespace App\FizzBuzz;

use App\FizzBuzz\FizzBuzzPresenterInterface;

class FizzBuzzPresenterBuilder
{
    public static function build(int $num): FizzBuzzPresenterInterface
    {
        foreach (glob(__DIR__ . '/Presenter/Dynamic/*.php') as $file) {
            require_once $file;
            $class = '\App\FizzBuzz\Presenter\Dynamic\\' . basename($file, '.php');
            $presenter = new $class($num);
            try {
                // throw ParseError if $num is not available
                $presenter->isAvailable();

                return $presenter;
            } catch (\ParseError $e) {
                // none
            }
        }

        return new \App\FizzBuzz\Presenter\NumberPresenter($num);
    }
}
