<?php
namespace App\FizzBuzz\Presenter;

use App\FizzBuzz\FizzBuzzPresenterInterface;

class FizzBuzzPresenter implements FizzBuzzPresenterInterface
{
    private $num;

    public function __construct(int $num)
    {
        $this->num = $num;
    }

    public function __toString(): string
    {
        return 'FizzBuzz';
    }

    public function isAvailable(): bool
    {
        return true;
    }
}
