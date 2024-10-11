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

    public function addEdge($vertex1, $vertex2, $weight)
    {
        $this->adjList[$vertex1][$vertex2] = $weight;
        $this->adjList[$vertex2][$vertex1] = $weight;  // Assuming undirected graph
    }

    public function dijkstra($start)
    {
        $distances = [];
        $visited = [];
        $pq = new SplPriorityQueue();

        foreach ($this->adjList as $vertex => $value) {
            $distances[$vertex] = PHP_INT_MAX;
        }
        $distances[$start] = 0;

        $pq->insert($start, 0);

        while (!$pq->isEmpty()) {
            $current = $pq->extract();
            $visited[$current] = true;

            foreach ($this->adjList[$current] as $neighbor => $weight) {
                if (!isset($visited[$neighbor])) {
                    $newDist = $distances[$current] + $weight;

                    if ($newDist < $distances[$neighbor]) {
                        $distances[$neighbor] = $newDist;
                        $pq->insert($neighbor, -$newDist);  // Negative for min-priority
                    }
                }
            }
        }

        foreach ($distances as $vertex => $distance) {
            echo "Distance from $start to $vertex is $distance\n";
        }
    }
}

// Example usage
$graph = new Graph();
$graph->addVertex('A');
$graph->addVertex('B');
$graph->addVertex('C');
$graph->addVertex('D');
$graph->addEdge('A', 'B', 1);
$graph->addEdge('A', 'C', 4);
$graph->addEdge('B', 'C', 2);
$graph->addEdge('B', 'D', 5);
$graph->dijkstra('A');

/* Output:
Distance from A to A is 0
Distance from A to B is 1
Distance from A to C is 3
Distance from A to D is 6
*/
