<?php
function binarySearch($array, $target)
{
    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($array[$mid] === $target) {
            return $mid;  // Element found
        } elseif ($array[$mid] < $target) {
            $low = $mid + 1;  // Search the right half
        } else {
            $high = $mid - 1;  // Search the left half
        }
    }
    return -1;  // Element not found
}

// Example usage
$numbers = [3, 9, 15, 27, 38, 43, 82];  // Sorted array
$target = 15;

$index = binarySearch($numbers, $target);
if ($index !== -1) {
    echo "Element found at index: $index";  // Output: Element found at index: 2
} else {
    echo "Element not found";
}
