<?php
function bubbleSort($array)
{
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // Swap adjacent elements
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

// Example usage
$unsortedArray = [64, 25, 12, 22, 11];
$sortedArray = bubbleSort($unsortedArray);
print_r($sortedArray);  // Output: Array ( [0] => 11 [1] => 12 [2] => 22 [3] => 25 [4] => 64 )
