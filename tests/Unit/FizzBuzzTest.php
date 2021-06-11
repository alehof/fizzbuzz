<?php

namespace Tests\Unit;

use App\Models\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function it_returns_fizz_for_multiples_of_three()
    {
        // static for now maybe I'll adapt that
        $this->assertEquals('fizz',  FizzBuzz::check(3));
    }
}
