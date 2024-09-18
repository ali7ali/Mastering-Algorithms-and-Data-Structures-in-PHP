<?php
// Efficient binary search (O(log n))
$numbers = range(1, 1000000); // Array of 1 million numbers
$target = 999999;

function binarySearch($numbers, $target)
{
    $low = 0;
    $high = count($numbers) - 1;

    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);

        if ($numbers[$mid] === $target) {
            return "Found: $numbers[$mid]";
        } elseif ($numbers[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    return "Not Found";
}

echo binarySearch($numbers, $target);
