<?php
function selectionSort($array)
{
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;

        // Find the minimum element in the unsorted part
        for ($j = $i + 1; $j < $n; $j++) {
            if ($array[$j] < $array[$minIndex]) {
                $minIndex = $j;
            }
        }

        // Swap the found minimum element with the first unsorted element
        $temp = $array[$minIndex];
        $array[$minIndex] = $array[$i];
        $array[$i] = $temp;
    }
    return $array;
}

// Example usage
$unsortedArray = [64, 25, 12, 22, 11];
$sortedArray = selectionSort($unsortedArray);
print_r($sortedArray);  // Output: Array ( [0] => 11 [1] => 12 [2] => 22 [3] => 25 [4] => 64 )
