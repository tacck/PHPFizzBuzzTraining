<?php
namespace App\FizzBuzz\Presenter;

use App\FizzBuzz\FizzBuzzPresenterInterface;

class NumberPresenter implements FizzBuzzPresenterInterface
{
    private $num;

    public function __construct(int $num)
    {
        $this->num = $num;
    }

    public function __toString(): string
    {
        return "$this->num";
    }

    public function isAvailable(): bool
    {
        return true;
    }
}
