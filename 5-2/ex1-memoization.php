<?php
function fibonacci($n, &$memo = [])
{
    // Base cases
    if ($n === 0) {
        return 0;
    }
    if ($n === 1) {
        return 1;
    }

    // Check if the result is already memoized
    if (isset($memo[$n])) {
        return $memo[$n];
    }

    // Store the result in the memo and return it
    $memo[$n] = fibonacci($n - 1, $memo) + fibonacci($n - 2, $memo);
    return $memo[$n];
}

// Example usage
echo fibonacci(10);  // Output: 55
