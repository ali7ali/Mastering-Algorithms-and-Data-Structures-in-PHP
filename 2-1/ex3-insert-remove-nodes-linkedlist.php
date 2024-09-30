<?php
// Define a Node class
class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

// Define a LinkedList class
class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    // Insert a node at the end of the list
    public function insert($data)
    {
        $newNode = new Node($data);

        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $currentNode = $this->head;
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
    }

    // Remove the first occurrence of a node with the given data
    public function remove($data)
    {
        if ($this->head === null) {
            return;
        }

        // If the head node is the one to be removed
        if ($this->head->data === $data) {
            $this->head = $this->head->next;
            return;
        }

        $currentNode = $this->head;
        while ($currentNode->next !== null && $currentNode->next->data !== $data) {
            $currentNode = $currentNode->next;
        }

        if ($currentNode->next !== null) {
            $currentNode->next = $currentNode->next->next;
        }
    }

    // Display the linked list
    public function display()
    {
        $currentNode = $this->head;
        while ($currentNode !== null) {
            echo $currentNode->data . " -> ";
            $currentNode = $currentNode->next;
        }
        echo "null\n";
    }
}

// Create a new linked list
$linkedList = new LinkedList();
$linkedList->insert('Apple');
$linkedList->insert('Banana');
$linkedList->insert('Cherry');
$linkedList->display();  // Output: Apple -> Banana -> Cherry -> null

// Remove 'Banana' from the linked list
$linkedList->remove('Banana');
$linkedList->display();  // Output: Apple -> Cherry -> null
