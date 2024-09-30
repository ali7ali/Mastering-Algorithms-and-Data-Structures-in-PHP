<?php
class Stack
{
    private $stack = [];

    // Push an item onto the stack
    public function push($item)
    {
        array_push($this->stack, $item);
    }

    // Pop an item off the stack
    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_pop($this->stack);
        } else {
            return "Stack is empty!";
        }
    }

    // Peek at the top item of the stack
    public function peek()
    {
        return end($this->stack);
    }

    // Check if the stack is empty
    public function isEmpty()
    {
        return empty($this->stack);
    }

    // Display the stack
    public function display()
    {
        return $this->stack;
    }
}

// Example of using the Stack class
$stack = new Stack();
$stack->push("Apple");
$stack->push("Banana");
$stack->push("Cherry");

echo "Stack: ";
print_r($stack->display()); // Output: ['Apple', 'Banana', 'Cherry']

echo "Popped: " . $stack->pop() . "\n"; // Output: Cherry
echo "Stack after pop: ";
print_r($stack->display()); // Output: ['Apple', 'Banana']
