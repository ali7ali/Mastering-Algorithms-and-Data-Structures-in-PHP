<?php
class QuickSort
{
    public static function sort(array $arr): array
    {
        if (count($arr) < 2) {
            return $arr;
        }

        $pivot = $arr[0];
        $left = array_filter(array_slice($arr, 1), fn($x) => $x <= $pivot);
        $right = array_filter(array_slice($arr, 1), fn($x) => $x > $pivot);

        return array_merge(self::sort($left), [$pivot], self::sort($right));
    }
}

// Example usage
$array = [10, 7, 8, 9, 1, 5];
$sortedArray = QuickSort::sort($array);
print_r($sortedArray);  // Output: Sorted array
