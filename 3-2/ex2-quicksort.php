<?php
function quickSort($array)
{
    if (count($array) < 2) {
        return $array;
    }

    // Select a pivot
    $pivot = $array[0];
    $left = [];
    $right = [];

    // Partition the array
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] <= $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    // Recursively apply quickSort to left and right partitions
    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

// Example usage
$unsortedArray = [38, 27, 43, 3, 9, 82, 10];
$sortedArray = quickSort($unsortedArray);
print_r($sortedArray);  // Output: Array ( [0] => 3 [1] => 9 [2] => 10 [3] => 27 [4] => 38 [5] => 43 [6] => 82 )
