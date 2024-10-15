<?php
function calculateDistance($point1, $point2)
{
    return sqrt(pow($point1[0] - $point2[0], 2) + pow($point1[1] - $point2[1], 2));
}

function nearestNeighborTSP($locations, $start)
{
    $visited = [$start];
    $current = $start;
    $totalDistance = 0;

    while (count($visited) < count($locations)) {
        $nearest = null;
        $nearestDistance = PHP_INT_MAX;

        foreach ($locations as $location => $coordinates) {
            if (!in_array($location, $visited)) {
                $distance = calculateDistance($locations[$current], $coordinates);
                if ($distance < $nearestDistance) {
                    $nearest = $location;
                    $nearestDistance = $distance;
                }
            }
        }

        $visited[] = $nearest;
        $totalDistance += $nearestDistance;
        $current = $nearest;
    }

    // Return to the starting point
    $totalDistance += calculateDistance($locations[$current], $locations[$start]);
    return [$visited, $totalDistance];
}

// Example usage
$locations = [
    'A' => [0, 0],
    'B' => [2, 3],
    'C' => [5, 4],
    'D' => [1, 1],
    'E' => [3, 2],
];

list($route, $distance) = nearestNeighborTSP($locations, 'A');
echo "Route: " . implode(" -> ", $route) . "\n";
echo "Total Distance: $distance\n";
