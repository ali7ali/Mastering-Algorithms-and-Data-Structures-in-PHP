<?php
function linearSearch($array, $target)
{
    foreach ($array as $index => $value) {
        if ($value === $target) {
            return $index;
        }
    }
    return -1;  // Return -1 if the target is not found
}

// Example usage
$numbers = [10, 23, 45, 70, 11, 15];
$target = 70;

$index = linearSearch($numbers, $target);
if ($index !== -1) {
    echo "Element found at index: $index";  // Output: Element found at index: 3
} else {
    echo "Element not found";
}
