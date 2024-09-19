<?php
/* 1. array_push() – Adding Elements to an Array: */
$fruits = ['Apple', 'Banana'];
array_push($fruits, 'Cherry', 'Orange');

// Print the updated array
print_r($fruits);
// Output: Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Orange )

/*******************************/

/* 2. array_pop() – Removing the Last Element: */
$fruits = ['Apple', 'Banana', 'Cherry'];
array_pop($fruits);

// Print the updated array
print_r($fruits);
// Output: Array ( [0] => Apple [1] => Banana )

/*******************************/

/* 3. array_merge() – Merging Two Arrays: */
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$merged = array_merge($array1, $array2);

// Print the merged array
print_r($merged);
// Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )

/*******************************/

/*4. array_search() – Searching for an Element: */
$fruits = ['Apple', 'Banana', 'Cherry'];
$index = array_search('Banana', $fruits);

echo $index; // Output: 1 (the index of Banana)

/*******************************/

/* 5. sort() and rsort() – Sorting Arrays: */
$numbers = [4, 1, 8, 5, 2];
sort($numbers); // Ascending order
print_r($numbers);
// Output: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 5 [4] => 8 )

rsort($numbers); // Descending order
print_r($numbers);
// Output: Array ( [0] => 8 [1] => 5 [2] => 4 [3] => 2 [4] => 1 )