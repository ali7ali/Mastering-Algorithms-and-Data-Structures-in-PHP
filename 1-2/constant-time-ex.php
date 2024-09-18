<?php
// O(1) - Constant time example
function getFirstElement($arr)
{
    return $arr[0]; // Always returns the first element, no matter the size of the array
}

$arr = [10, 20, 30, 40, 50];
echo getFirstElement($arr); // Output: 10
