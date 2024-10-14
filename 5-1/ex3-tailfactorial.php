<?php
function tailFactorial($n, $accumulator = 1)
{
    // Base case
    if ($n <= 1) {
        return $accumulator;
    }

    // Tail recursive case
    return tailFactorial($n - 1, $n * $accumulator);
}

// Example usage
echo tailFactorial(5);  // Output: 120
