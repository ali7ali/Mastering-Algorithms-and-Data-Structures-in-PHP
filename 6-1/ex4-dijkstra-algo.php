<?php
function dijkstra($graph, $start)
{
    $distances = [];
    $visited = [];
    $pq = new SplPriorityQueue();

    foreach ($graph as $vertex => $edges) {
        $distances[$vertex] = PHP_INT_MAX;
    }
    $distances[$start] = 0;
    $pq->insert($start, 0);

    while (!$pq->isEmpty()) {
        $current = $pq->extract();
        if (isset($visited[$current])) {
            continue;
        }
        $visited[$current] = true;

        foreach ($graph[$current] as $neighbor => $weight) {
            $newDist = $distances[$current] + $weight;
            if ($newDist < $distances[$neighbor]) {
                $distances[$neighbor] = $newDist;
                $pq->insert($neighbor, -$newDist);
            }
        }
    }

    return $distances;
}

// Example usage
$graph = [
    'A' => ['B' => 1, 'C' => 4],
    'B' => ['A' => 1, 'C' => 2, 'D' => 5],
    'C' => ['A' => 4, 'B' => 2, 'D' => 1],
    'D' => ['B' => 5, 'C' => 1],
];

$distances = dijkstra($graph, 'A');
print_r($distances);  // Output: Shortest distances from 'A'
