<?php
function fibonacci($n)
{
    // Base case: fibonacci(0) is 0, fibonacci(1) is 1
    if ($n === 0) {
        return 0;
    }
    if ($n === 1) {
        return 1;
    }

    // Recursive case: fibonacci(n) = fibonacci(n - 1) + fibonacci(n - 2)
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Example usage
echo fibonacci(6);  // Output: 8
