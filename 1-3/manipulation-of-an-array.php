<?php
// Multidimensional array
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Adding a new row to the matrix
array_push($matrix, [10, 11, 12]);
print_r($matrix);


// Removing the last row from the matrix
array_pop($matrix);
print_r($matrix);
