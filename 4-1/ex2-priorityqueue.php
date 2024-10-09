<?php
class MinHeap
{
    private $heap;

    public function __construct()
    {
        $this->heap = [];
    }

    // Insert a value into the heap
    public function insert($value)
    {
        $this->heap[] = $value;
        $this->heapifyUp(count($this->heap) - 1);
    }

    // Remove and return the minimum value from the heap
    public function extractMin()
    {
        if (count($this->heap) === 0) {
            return null;
        }

        $minValue = $this->heap[0];
        $this->heap[0] = array_pop($this->heap);
        $this->heapifyDown(0);

        return $minValue;
    }

    // Heapify up to maintain heap property after insertion
    private function heapifyUp($index)
    {
        while ($index > 0) {
            $parentIndex = floor(($index - 1) / 2);
            if ($this->heap[$index] < $this->heap[$parentIndex]) {
                $this->swap($index, $parentIndex);
                $index = $parentIndex;
            } else {
                break;
            }
        }
    }

    // Heapify down to maintain heap property after extraction
    private function heapifyDown($index)
    {
        $leftChildIndex = 2 * $index + 1;
        $rightChildIndex = 2 * $index + 2;
        $smallest = $index;

        if ($leftChildIndex < count($this->heap) && $this->heap[$leftChildIndex] < $this->heap[$smallest]) {
            $smallest = $leftChildIndex;
        }

        if ($rightChildIndex < count($this->heap) && $this->heap[$rightChildIndex] < $this->heap[$smallest]) {
            $smallest = $rightChildIndex;
        }

        if ($smallest !== $index) {
            $this->swap($index, $smallest);
            $this->heapifyDown($smallest);
        }
    }

    // Swap two elements in the heap
    private function swap($index1, $index2)
    {
        $temp = $this->heap[$index1];
        $this->heap[$index1] = $this->heap[$index2];
        $this->heap[$index2] = $temp;
    }

    // Display the heap
    public function display()
    {
        print_r($this->heap);
    }
}

class PriorityQueue
{
    private $minHeap;

    public function __construct()
    {
        $this->minHeap = new MinHeap();
    }

    // Insert an element into the priority queue
    public function enqueue($value)
    {
        $this->minHeap->insert($value);
    }

    // Remove and return the element with the highest priority (smallest value)
    public function dequeue()
    {
        return $this->minHeap->extractMin();
    }

    // Display the priority queue
    public function display()
    {
        $this->minHeap->display();
    }
}

// Example usage
$priorityQueue = new PriorityQueue();
$priorityQueue->enqueue(15);
$priorityQueue->enqueue(10);
$priorityQueue->enqueue(30);
$priorityQueue->enqueue(5);
$priorityQueue->display();  // Output: Array ( [0] => 5 [1] => 10 [2] => 30 [3] => 15 )

echo "Dequeued: " . $priorityQueue->dequeue() . "\n";  // Output: Dequeued: 5
$priorityQueue->display();  // Output: Array ( [0] => 10 [1] => 15 [2] => 30 )
