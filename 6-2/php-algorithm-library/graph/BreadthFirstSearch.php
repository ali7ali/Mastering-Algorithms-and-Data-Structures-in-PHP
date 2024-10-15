<?php
class BreadthFirstSearch
{
    public static function bfs(array $graph, string $start): array
    {
        $visited = [];
        $queue = [$start];
        $result = [];

        while (!empty($queue)) {
            $current = array_shift($queue);
            if (!in_array($current, $visited)) {
                $visited[] = $current;
                $result[] = $current;
                $queue = array_merge($queue, $graph[$current]);
            }
        }

        return $result;
    }
}

// Example usage
$graph = [
    'A' => ['B', 'C'],
    'B' => ['D', 'E'],
    'C' => ['F'],
    'D' => [],
    'E' => ['F'],
    'F' => []
];

$traversal = BreadthFirstSearch::bfs($graph, 'A');
print_r($traversal);  // Output: ['A', 'B', 'C', 'D', 'E', 'F']
