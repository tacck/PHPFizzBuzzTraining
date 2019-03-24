<?php
namespace App\FizzBuzz;

interface FizzBuzzPresenterInterface
{
    public function __construct(int $num);
    public function __toString(): string;
    public function isAvailable(): bool;
}