<?php

namespace spec\App;

use App\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(FizzBuzz::class);
    }

    public function it_should_return_1(): void
    {
        $this->handle(1)->shouldReturn(1);
    }

    public function it_should_return_2(): void
    {
        $this->handle(2)->shouldReturn(2);
    }

    public function it_should_return_fizz_for_3(): void
    {
        $this->handle(3)->shouldReturn(FizzBuzz::DIVISIBLE_BY_THREE);
    }

    public function it_should_return_buzz_for_5(): void
    {
        $this->handle(5)->shouldReturn(FizzBuzz::DIVISIBLE_BY_FIVE);
    }

    public function it_should_return_fizz_for_6(): void
    {
        $this->handle(6)->shouldReturn(FizzBuzz::DIVISIBLE_BY_THREE);
    }

    public function it_should_return_fizz_for_9(): void
    {
        $this->handle(9)->shouldReturn(FizzBuzz::DIVISIBLE_BY_THREE);
    }

    public function it_should_return_buzz_for_10(): void
    {
        $this->handle(10)->shouldReturn(FizzBuzz::DIVISIBLE_BY_FIVE);
    }

    public function it_should_return_fizzbuzz_for_15(): void
    {
        $this->handle(15)->shouldReturn(FizzBuzz::DIVISIBLE_BY_THREE_AND_FIVE);
    }

    public function it_builds_an_array_for_fizzbuzz(): void
    {
        $this->runUntil(15)->shouldReturn([
            1,
            2,
            FizzBuzz::DIVISIBLE_BY_THREE,
            4,
            FizzBuzz::DIVISIBLE_BY_FIVE,
            FizzBuzz::DIVISIBLE_BY_THREE,
            7,
            8,
            FizzBuzz::DIVISIBLE_BY_THREE,
            FizzBuzz::DIVISIBLE_BY_FIVE,
            11,
            FizzBuzz::DIVISIBLE_BY_THREE,
            13,
            14,
            FizzBuzz::DIVISIBLE_BY_THREE_AND_FIVE
        ]);
    }
}
