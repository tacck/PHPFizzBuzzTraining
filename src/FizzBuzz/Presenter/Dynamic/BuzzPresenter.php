<?php
namespace App\FizzBuzz\Presenter\Dynamic;

use App\FizzBuzz\FizzBuzzPresenterInterface;

class BuzzPresenter implements FizzBuzzPresenterInterface
{
    private $num;

    public function __construct(int $num)
    {
        $this->num = $num;
    }

    public function __toString(): string
    {
        return 'Buzz';
    }

    public function isAvailable(): bool
    {
        return ($this->num % 3 !== 0 && $this->num % 5 === 0)
            ? true
            : eval('invalid');
    }
}
