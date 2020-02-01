<?php
namespace App\FizzBuzz;

class FizzBuzzTypes
{
    private $num;
    private $mod;

    private $FIZZ_BUZZ_TYPE= [
            1 => 'Fizz',
            2 => 'Buzz',
            3 => 'FizzBuzz'
    ];

    public function __construct(int $num)
    {
        $this->num = $num;
        $mod3 = $num % 3 === 0;
        $mod5 = $num % 5 === 0;
        $this->mod = $mod5 << 1 | $mod3;

        $this->FIZZ_BUZZ_TYPE[0] = $this->num;
    }

    public function getType(): string
    {
        return $this->FIZZ_BUZZ_TYPE[$this->mod];
    }
}
