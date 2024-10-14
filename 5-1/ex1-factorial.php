<?php
function factorial($n)
{
    // Base case: factorial of 0 or 1 is 1
    if ($n <= 1) {
        return 1;
    }

    // Recursive case: n * factorial(n - 1)
    return $n * factorial($n - 1);
}

// Example usage
echo factorial(5);  // Output: 120
