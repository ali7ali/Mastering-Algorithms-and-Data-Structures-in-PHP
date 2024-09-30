<?php
// Counting word occurrences using a hash table
$words = ['apple', 'banana', 'apple', 'orange', 'banana', 'apple'];

$wordCount = [];
foreach ($words as $word) {
    if (isset($wordCount[$word])) {
        $wordCount[$word]++;
    } else {
        $wordCount[$word] = 1;
    }
}

print_r($wordCount);
// Output: Array ( [apple] => 3 [banana] => 2 [orange] => 1 )
