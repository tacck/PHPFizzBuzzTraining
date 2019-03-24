<?php
namespace App\FizzBuzz\Presenter;

use App\FizzBuzz\FizzBuzzPresenterInterface;

class FizzPresenter implements FizzBuzzPresenterInterface
{
    private $num;

    public function __construct(int $num)
    {
        $this->num = $num;
    }

    public function __toString(): string
    {
        return 'Fizz';
    }

    public function isAvailable(): bool
    {
        return true;
    }
}
