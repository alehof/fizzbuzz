<?php

namespace Tests\Unit;

use App\Models\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function it_returns_fizz_for_multiples_of_three()
    {
        foreach ([3, 6, 9, 12] as $number)
            $this->assertEquals('fizz',  FizzBuzz::check($number));
    }

    /** @test */
    public function it_returns_buzz_for_multiples_of_five()
    {
        foreach ([5, 10, 20] as $number)
            $this->assertEquals('buzz',  FizzBuzz::check($number));
    }
}
