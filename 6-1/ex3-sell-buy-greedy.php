<?php
function maxProfit($prices)
{
    $minPrice = PHP_INT_MAX;
    $maxProfit = 0;

    foreach ($prices as $price) {
        if ($price < $minPrice) {
            $minPrice = $price;
        } elseif ($price - $minPrice > $maxProfit) {
            $maxProfit = $price - $minPrice;
        }
    }

    return $maxProfit;
}

// Example usage
$prices = [7, 1, 5, 3, 6, 4];
echo "Max Profit: " . maxProfit($prices);  // Output: 5 (buy at 1, sell at 6)
