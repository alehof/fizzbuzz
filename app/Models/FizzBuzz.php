<?php

namespace App\Models;

class FizzBuzz
{
    public static function check(int $number)
    {
        $result = '';
        // if ($number % 3 === 0 & $number % 5 === 0)
        //     return 'fizzbuzz';
        if ($number % 3 === 0)
            $result .= 'fizz';
        if ($number % 5 === 0)
            $result .= 'buzz';

        return $result ?: $number;
    }
}
