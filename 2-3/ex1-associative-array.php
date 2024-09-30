<?php
// Simple associative array
$userData = [
    'name' => 'Ali',
    'age' => 30,
    'city' => 'Dubai'
];

// Accessing values by key
echo $userData['name']; // Output: Ali
echo $userData['age'];  // Output: 30

// Adding and updating elements in an associative array
$userData['email'] = 'ali@example.com';  // Adding new key-value pair
$userData['age'] = 31;                   // Updating existing key-value pair

// Removing an element from the associative array
unset($userData['city']);  // Remove the 'city' key-value pair

// Display updated array
print_r($userData);
// Output: Array ( [name] => Ali [age] => 31 [email] => ali@example.com )