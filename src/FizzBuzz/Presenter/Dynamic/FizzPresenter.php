<?php
namespace App\FizzBuzz\Presenter\Dynamic;

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
        return ($this->num % 3 === 0 && $this->num % 5 !== 0)
            ? true
            : eval('invalid');
    }
}
