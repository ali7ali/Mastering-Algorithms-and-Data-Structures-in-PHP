<?php
// Function to schedule tasks based on their start and finish times
function scheduleTasks($tasks)
{
    // Sort tasks by their finish times
    usort($tasks, function ($a, $b) {
        return $a['finish'] <=> $b['finish'];
    });

    $selectedTasks = [];
    $lastFinishTime = 0;

    foreach ($tasks as $task) {
        if ($task['start'] >= $lastFinishTime) {
            $selectedTasks[] = $task;
            $lastFinishTime = $task['finish'];
        }
    }

    return $selectedTasks;
}

// Example usage
$tasks = [
    ['start' => 1, 'finish' => 3],
    ['start' => 2, 'finish' => 5],
    ['start' => 4, 'finish' => 6],
    ['start' => 6, 'finish' => 8],
    ['start' => 5, 'finish' => 7],
];

$scheduled = scheduleTasks($tasks);
print_r($scheduled);  // Output: Scheduled non-overlapping tasks
