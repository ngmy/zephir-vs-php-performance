<?php
declare(strict_types=1);

for ($i = 0; $i < 39; $i++) {
    $timeStart = microtime(true);
    $result = MyZephir\Fibonacci::fib($i);
    $time = microtime(true) - $timeStart;
    echo sprintf('%.8f', $time) . PHP_EOL;
}
