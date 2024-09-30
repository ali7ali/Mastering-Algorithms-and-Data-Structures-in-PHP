<?php
// Define a Node class for a linked list
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

// Create a simple linked list with three nodes
$node1 = new Node('Apple');
$node2 = new Node('Banana');
$node3 = new Node('Cherry');

$node1->next = $node2;
$node2->next = $node3;

// Traverse the linked list and print the data
$currentNode = $node1;
while ($currentNode !== null) {
    echo $currentNode->data . "\n";
    $currentNode = $currentNode->next;
}
