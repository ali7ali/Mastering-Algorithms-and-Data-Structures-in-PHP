<?php
// O(log n) - Binary search example
function binarySearch($arr, $target)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);

        if ($arr[$mid] === $target) {
            return "Found: $arr[$mid]";
        } elseif ($arr[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    return "Not Found";
}

$arr = [10, 20, 30, 40, 50];
echo binarySearch($arr, 30); // Output: Found: 30
