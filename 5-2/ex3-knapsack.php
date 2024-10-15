<?php
function knapsack($capacity, $weights, $values, $n)
{
    $dp = array_fill(0, $n + 1, array_fill(0, $capacity + 1, 0));

    for ($i = 0; $i <= $n; $i++) {
        for ($w = 0; $w <= $capacity; $w++) {
            if ($i == 0 || $w == 0) {
                $dp[$i][$w] = 0;
            } elseif ($weights[$i - 1] <= $w) {
                $dp[$i][$w] = max($values[$i - 1] + $dp[$i - 1][$w - $weights[$i - 1]], $dp[$i - 1][$w]);
            } else {
                $dp[$i][$w] = $dp[$i - 1][$w];
            }
        }
    }

    return $dp[$n][$capacity];
}

// Example usage
$values = [60, 100, 120];
$weights = [10, 20, 30];
$capacity = 50;
$n = count($values);

echo knapsack($capacity, $weights, $values, $n);  // Output: 220
