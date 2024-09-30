<?php
// Define a Node class for a binary tree
class Node
{
    public $data;
    public $left;
    public $right;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}


// Create nodes
$root = new Node(10);
$root->left = new Node(5);
$root->right = new Node(15);
$root->left->left = new Node(3);
$root->left->right = new Node(7);
$root->right->left = new Node(12);
$root->right->right = new Node(18);

// Display the tree structure
function displayTree($node)
{
    if ($node === null) {
        return;
    }
    echo $node->data . " ";
    displayTree($node->left);
    displayTree($node->right);
}

// Display the tree using pre-order traversal
displayTree($root);  // Output: 10 5 3 7 15 12 18
