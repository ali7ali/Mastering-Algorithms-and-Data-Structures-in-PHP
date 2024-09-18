<?php
// Inefficient linear search (O(n))
$numbers = range(1, 1000000); // Array of 1 million numbers
$target = 999999;

function linearSearch($numbers, $target)
{
    foreach ($numbers as $number) {
        if ($number === $target) {
            return "Found: $number";
        }
    }
    return "Not Found";
}

echo linearSearch($numbers, $target);
