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

    public function dfs($start)
    {
        $visited = [];
        $this->dfsUtil($start, $visited);
    }

    private function dfsUtil($vertex, &$visited)
    {
        $visited[$vertex] = true;
        echo $vertex . " ";

        foreach ($this->adjList[$vertex] as $neighbor) {
            if (!isset($visited[$neighbor])) {
                $this->dfsUtil($neighbor, $visited);
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
$graph->dfs('A');  // Output: A B D C
