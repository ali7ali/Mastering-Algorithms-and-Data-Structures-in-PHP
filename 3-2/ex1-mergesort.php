<?php
function mergeSort($array)
{
    if (count($array) <= 1) {
        return $array;
    }

    // Split the array into two halves
    $middle = floor(count($array) / 2);
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    // Recursively split & merge
    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right)
{
    $result = [];
    $i = $j = 0;

    // Merge the sorted halves
    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] <= $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    // Append remaining elements
    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

// Example usage
$unsortedArray = [38, 27, 43, 3, 9, 82, 10];
$sortedArray = mergeSort($unsortedArray);
print_r($sortedArray);  // Output: Array ( [0] => 3 [1] => 9 [2] => 10 [3] => 27 [4] => 38 [5] => 43 [6] => 82 )
