<?php
class BubbleSort
{
    public static function sort(array $arr): array
    {
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    // Swap
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        return $arr;
    }
}

// Example usage
$array = [64, 34, 25, 12, 22, 11, 90];
$sortedArray = BubbleSort::sort($array);
print_r($sortedArray);  // Output: Sorted array
