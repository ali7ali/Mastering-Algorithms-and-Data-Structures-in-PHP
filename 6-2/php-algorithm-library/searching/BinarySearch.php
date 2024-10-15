<?php
class BinarySearch
{
    public static function search(array $arr, int $target): int
    {
        $low = 0;
        $high = count($arr) - 1;

        while ($low <= $high) {
            $mid = intdiv($low + $high, 2);
            if ($arr[$mid] == $target) {
                return $mid;
            } elseif ($arr[$mid] < $target) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }

        return -1;  // Target not found
    }
}

// Example usage
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$target = 5;
$index = BinarySearch::search($array, $target);
echo "Target found at index: $index";  // Output: Target found at index: 4
