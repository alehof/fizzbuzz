<?php

namespace App\Models;

class FizzBuzz
{
    public static function check(int $number)
    {
        if ($number % 3 === 0)
            return 'fizz';
        if ($number % 5 === 0)
            return 'buzz';
    }
}
