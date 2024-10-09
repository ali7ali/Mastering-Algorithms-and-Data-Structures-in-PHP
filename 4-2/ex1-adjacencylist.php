<?php
class Graph
{
    private $adjList;

    public function __construct()
    {
        $this->adjList = [];
    }

    // Add a vertex to the graph
    public function addVertex($vertex)
    {
        if (!array_key_exists($vertex, $this->adjList)) {
            $this->adjList[$vertex] = [];
        }
    }

    // Add an edge between two vertices
    public function addEdge($vertex1, $vertex2)
    {
        if (!array_key_exists($vertex1, $this->adjList)) {
            $this->addVertex($vertex1);
        }
        if (!array_key_exists($vertex2, $this->adjList)) {
            $this->addVertex($vertex2);
        }
        $this->adjList[$vertex1][] = $vertex2;
        $this->adjList[$vertex2][] = $vertex1;  // Assuming an undirected graph
    }

    // Display the graph
    public function display()
    {
        foreach ($this->adjList as $vertex => $edges) {
            echo "$vertex: " . implode(", ", $edges) . "\n";
        }
    }
}

// Example usage
$graph = new Graph();
$graph->addVertex('A');
$graph->addVertex('B');
$graph->addVertex('C');
$graph->addEdge('A', 'B');
$graph->addEdge('A', 'C');
$graph->addEdge('B', 'C');
$graph->display();

/* Output:
A: B, C
B: A, C
C: A, B
*/
