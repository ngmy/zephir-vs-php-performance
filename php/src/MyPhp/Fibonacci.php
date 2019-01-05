<?php
declare(strict_types=1);

namespace MyPhp;

class Fibonacci
{
    public static function fib(int $n): int
    {
        if ($n == 0) {
            return 0;
        }
        if ($n == 1) {
            return 1;
        }
        return self::fib($n - 1) + self::fib($n - 2);
    }
}
