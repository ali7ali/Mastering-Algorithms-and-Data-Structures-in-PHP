<?php
function insertionSort($array)
{
    $n = count($array);
    for ($i = 1; $i < $n; $i++) {
        $key = $array[$i];
        $j = $i - 1;

        // Move elements that are greater than key to one position ahead
        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $key;
    }
    return $array;
}

// Example usage
$unsortedArray = [64, 25, 12, 22, 11];
$sortedArray = insertionSort($unsortedArray);
print_r($sortedArray);  // Output: Array ( [0] => 11 [1] => 12 [2] => 22 [3] => 25 [4] => 64 )
