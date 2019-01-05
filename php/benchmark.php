<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

for ($i = 0; $i < 39; $i++) {
    $timeStart = microtime(true);
    $result = MyPhp\Fibonacci::fib($i);
    $time = microtime(true) - $timeStart;
    echo sprintf('%.8f', $time) . PHP_EOL;
}
