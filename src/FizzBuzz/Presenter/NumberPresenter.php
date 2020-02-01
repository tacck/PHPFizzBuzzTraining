<?php
namespace App\FizzBuzz\Presenter;

use App\FizzBuzz\PresenterEnum;
use App\FizzBuzz\FizzBuzzPresenterInterface;

class NumberPresenter implements FizzBuzzPresenterInterface
{
    private $num;

    public function __construct(int $num)
    {
        $this->num = $num;
    }

    public function toString(): string
    {
        $enum = new PresenterEnum($this->num);
        return $enum->getType();
    }
}
