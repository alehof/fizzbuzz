<?php

namespace App\Models;

class FizzBuzz
{
    public static function check(int $number)
    {
        if ($number % 5 === 0)
            return 'buzz';
        return 'fizz';
    }
}
