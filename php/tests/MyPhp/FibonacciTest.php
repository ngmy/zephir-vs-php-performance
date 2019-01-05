<?php
declare(strict_types=1);

namespace MyPhp;

use PHPUnit\Framework\TestCase as PhpUnitTestCase;
use MyPhp\Fibonacci;

class FibonacciTest extends PhpUnitTestCase
{
    public function provide_Fib_CalculationResultIsReturned(): array
    {
        return [
            [ 'n' => 0,  'expectedResult' => 0],
            [ 'n' => 1,  'expectedResult' => 1],
            [ 'n' => 2,  'expectedResult' => 1],
            [ 'n' => 10, 'expectedResult' => 55],
        ];
    }

    /**
     * @dataProvider provide_Fib_CalculationResultIsReturned
     */
    public function test_Fib_CalculationResultIsReturned(int $n, int $expectedResult): void
    {
        $actualResult = Fibonacci::fib($n);

        $this->assertEquals($expectedResult, $actualResult);
    }
}
