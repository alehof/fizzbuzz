<?php

namespace Tests\Unit;

use App\Models\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function it_returns_fizz_for_multiples_of_three()
    {
        foreach ([3, 9] as $number)
            $this->assertEquals('fizz',  FizzBuzz::check($number));
    }

    /** @test */
    public function it_returns_buzz_for_multiples_of_five()
    {
        foreach ([5, 25, 55] as $number)
            $this->assertEquals('buzz',  FizzBuzz::check($number));
    }

    /** @test */
    public function it_returns_fizz_buzz_for_multiples_of_three_and_five()
    {
        foreach ([15, 45, 75] as $number)
            $this->assertEquals('fizzbuzz',  FizzBuzz::check($number));
    }
    /** @test */
    public function it_returns_the_original_number_if_not_applicable_Fizz_BUZZ_rules()
    {
        foreach ([1, 11, 13, 17] as $number)
            $this->assertEquals($number,  FizzBuzz::check($number));
    }

    /** @test */
    public function it_returns_POP_for_multiples_of_seven()
    {
        foreach ([7] as $number)
            $this->assertEquals('pop',  FizzBuzz::check($number));
    }

    /** @test */
    public function it_returns_FIZZ_POP_for_multiples_of_seven_and_three()
    {
        foreach ([21] as $number)
            $this->assertEquals('fizzpop',  FizzBuzz::check($number));
    }

    /** @test */
    public function it_returns_fuzz_for_multiples_of_2()
    {
        foreach ([2, 4, 8, 16] as $number)
            $this->assertEquals('fuzz',  FizzBuzz::check($number));
    }
}
