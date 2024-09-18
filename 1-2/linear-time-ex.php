<?php
// O(n) - Linear time example
function printAllElements($arr)
{
    foreach ($arr as $element) {
        echo $element . " ";
    }
}

$arr = [10, 20, 30, 40, 50];
printAllElements($arr); // Output: 10 20 30 40 50
