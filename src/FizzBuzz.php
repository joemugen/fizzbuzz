<?php

namespace App;

class FizzBuzz
{
    public const DIVISIBLE_BY_THREE_AND_FIVE = 'FizzBuzz';

    public const DIVISIBLE_BY_THREE = 'Fizz';

    public const DIVISIBLE_BY_FIVE = 'Buzz';

    /**
     * @var $number int Current number being handled
     */
    private $number = 1;


    /**
     * Handle a number and returns the correct answer
     *
     * Returns a number or
     * - Fizz instead the number for multiples of 3 only
     * - Buzz instead the number for multiples of 5 only
     * - FizzBuzz instead the number for multiples of 3 and 5
     *
     * @param int $number
     * @return int|string
     */
    public function handle(int $number)
    {
        $this->number = $number;

        if ($this->isDivisibleBy(3) && $this->isDivisibleBy(5)) {
            return self::DIVISIBLE_BY_THREE_AND_FIVE;
        }

        if ($this->isDivisibleBy(3)) {
            return self::DIVISIBLE_BY_THREE;
        }

        if ($this->isDivisibleBy(5)) {
            return self::DIVISIBLE_BY_FIVE;
        }

        return $number;
    }

    /**
     * Run the FizzBuzz test until the given number
     *
     * It returns an array containing correct results
     *
     * @param int $number The max number
     * @return array An array containing good results for the FizzBuzz test
     */
    public function runUntil(int $number): array
    {
        return array_map(function (int $i) {
            return $this->handle($i);
        }, range(1, $number));
    }

    /**
     * Play FizzBuzz by echoing results
     *
     * @param int $number The max number
     * @param string $separator Optional separator between numbers
     */
    public function playFizzBuzz(int $number = 100, $separator = ' '): void
    {
        foreach ($this->runUntil($number) as $key => $value) {
            echo $key !== $number - 1 ? $value . $separator : $value . PHP_EOL;
        }
    }

    /**
     * Returns if the current number is divisible by the given number
     *
     * @param int $number Divisible by number
     * @return bool
     */
    private function isDivisibleBy(int $number): bool
    {
        return $this->number % $number === 0;
    }
}