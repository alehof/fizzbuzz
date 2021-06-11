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

    /** @test */
    public function it_returns_fizz_buzz_for_multiples_of_three_and_five()
    {
        foreach ([15, 30, 45] as $number)
            $this->assertEquals('fizzbuzz',  FizzBuzz::check($number));
    }
    /** @test */
    public function it_returns_the_original_number_if_not_applicable_Fizz_BUZZ_rules()
    {
        foreach ([1, 2, 4, 7] as $number)
            $this->assertEquals($number,  FizzBuzz::check($number));
    }
}
