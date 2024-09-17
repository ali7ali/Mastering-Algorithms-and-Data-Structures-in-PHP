<?php
// Lesson 1.1: What are Algorithms and Data Structures?

// Example of a simple algorithm: Searching through an array (Linear Search)

// Step 1: Define an array of user names
$users = ['Alice', 'Bob', 'Charlie', 'David', 'Eve'];

// Step 2: Function to perform a linear search
function findUser($users, $targetUser)
{
    // Loop through each user in the array
    foreach ($users as $user) {
        // If the target user is found, return a success message
        if ($user === $targetUser) {
            return "$targetUser found!";
        }
    }
    // If the target user is not found, return a failure message
    return "$targetUser not found.";
}

// Step 3: Search for a user and display the result
echo findUser($users, 'Charlie'); // Output: Charlie found!
