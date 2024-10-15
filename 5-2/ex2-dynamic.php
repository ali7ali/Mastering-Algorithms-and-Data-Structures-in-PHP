<?php
function fibonacciDP($n)
{
    if ($n === 0) {
        return 0;
    }
    if ($n === 1) {
        return 1;
    }

    $fib = [0, 1];

    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib[$n];
}

// Example usage
echo fibonacciDP(10);  // Output: 55
