<?php
class QuickSort
{
    // Sort an array using the Quick Sort algorithm
    public static function sort(array $arr): array
    {
        // Base case for recursion
        if (count($arr) < 2) {
            return $arr;
        }

        // Select the pivot (first element)
        $pivot = $arr[0];
        // Partition the array into two halves
        $left = array_filter(array_slice($arr, 1), fn($x) => $x <= $pivot);
        $right = array_filter(array_slice($arr, 1), fn($x) => $x > $pivot);
        // Recursive calls and merging the sorted halves
        return array_merge(self::sort($left), [$pivot], self::sort($right));
    }
}

// Example usage
$array = [10, 7, 8, 9, 1, 5];
$sortedArray = QuickSort::sort($array);
print_r($sortedArray);  // Output: Sorted array
