<?php
class Queue
{
    private $queue = [];

    // Enqueue an item at the end of the queue
    public function enqueue($item)
    {
        array_push($this->queue, $item);
    }

    // Dequeue an item from the front of the queue
    public function dequeue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        } else {
            return "Queue is empty!";
        }
    }

    // Peek at the front item of the queue
    public function peek()
    {
        return $this->queue[0];
    }

    // Check if the queue is empty
    public function isEmpty()
    {
        return empty($this->queue);
    }

    // Display the queue
    public function display()
    {
        return $this->queue;
    }
}

// Example of using the Queue class
$queue = new Queue();
$queue->enqueue("Apple");
$queue->enqueue("Banana");
$queue->enqueue("Cherry");

echo "Queue: ";
print_r($queue->display()); // Output: ['Apple', 'Banana', 'Cherry']

echo "Dequeued: " . $queue->dequeue() . "\n"; // Output: Apple
echo "Queue after dequeue: ";
print_r($queue->display()); // Output: ['Banana', 'Cherry']
