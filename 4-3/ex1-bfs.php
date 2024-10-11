<?php
class Graph
{
    private $adjList;

    public function __construct()
    {
        $this->adjList = [];
    }

    public function addVertex($vertex)
    {
        if (!array_key_exists($vertex, $this->adjList)) {
            $this->adjList[$vertex] = [];
        }
    }

    public function addEdge($vertex1, $vertex2)
    {
        if (!array_key_exists($vertex1, $this->adjList)) {
            $this->addVertex($vertex1);
        }
        if (!array_key_exists($vertex2, $this->adjList)) {
            $this->addVertex($vertex2);
        }
        $this->adjList[$vertex1][] = $vertex2;
        $this->adjList[$vertex2][] = $vertex1;  // Assuming undirected graph
    }

    public function bfs($start)
    {
        $visited = [];
        $queue = [$start];
        $visited[$start] = true;

        while (count($queue) > 0) {
            $current = array_shift($queue);
            echo $current . " ";

            foreach ($this->adjList[$current] as $neighbor) {
                if (!isset($visited[$neighbor])) {
                    $queue[] = $neighbor;
                    $visited[$neighbor] = true;
                }
            }
        }
    }
}

// Example usage
$graph = new Graph();
$graph->addVertex('A');
$graph->addVertex('B');
$graph->addVertex('C');
$graph->addVertex('D');
$graph->addEdge('A', 'B');
$graph->addEdge('A', 'C');
$graph->addEdge('B', 'D');
$graph->bfs('A');  // Output: A B C D
