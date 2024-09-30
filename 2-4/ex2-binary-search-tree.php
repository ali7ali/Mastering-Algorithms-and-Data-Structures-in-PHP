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

// Define a BinarySearchTree class
class BinarySearchTree
{
    public $root = null;

    // Insert a value into the BST
    public function insert($data)
    {
        $this->root = $this->insertRec($this->root, $data);
    }

    // Helper function to recursively insert a value
    private function insertRec($node, $data)
    {
        if ($node === null) {
            return new Node($data);
        }

        if ($data < $node->data) {
            $node->left = $this->insertRec($node->left, $data);
        } elseif ($data > $node->data) {
            $node->right = $this->insertRec($node->right, $data);
        }

        return $node;
    }

    // Display the tree using in-order traversal
    public function display()
    {
        $this->inOrder($this->root);
    }

    private function inOrder($node)
    {
        if ($node !== null) {
            $this->inOrder($node->left);
            echo $node->data . " ";
            $this->inOrder($node->right);
        }
    }

    // Search for a value in the BST
    public function search($data)
    {
        return $this->searchRec($this->root, $data);
    }

    private function searchRec($node, $data)
    {
        if ($node === null || $node->data === $data) {
            return $node;
        }

        if ($data < $node->data) {
            return $this->searchRec($node->left, $data);
        }

        return $this->searchRec($node->right, $data);
    }
}

// Create a BST and insert values
$bst = new BinarySearchTree();
$bst->insert(10);
$bst->insert(5);
$bst->insert(15);
$bst->insert(3);
$bst->insert(7);
$bst->insert(12);
$bst->insert(18);

// Display the tree in sorted order (in-order traversal)
$bst->display();  // Output: 3 5 7 10 12 15 18

// Search for a specific value in the BST
$result = $bst->search(7);
echo $result ? "Found: " . $result->data : "Not Found";  // Output: Found: 7
