<?php

namespace PUGRoma\Kata;

class Kata
{
    public function isReady()
    {
        return true;
    }

    public function vincoIo(array $numbers)
    {
        foreach ($numbers as $number) {
            if (!($number % 15)) {
                yield 'FizzBuzz';
            } elseif (!($number % 3) ) {
                yield 'Fizz';
            } elseif (!($number % 5) ) {
                yield 'Buzz';
            } else {
                yield $number;
            }
        }
    }
}



