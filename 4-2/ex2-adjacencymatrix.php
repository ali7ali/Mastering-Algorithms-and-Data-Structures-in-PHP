<?php
class GraphMatrix
{
    private $vertices;
    private $adjMatrix;

    public function __construct($size)
    {
        $this->vertices = $size;
        $this->adjMatrix = array_fill(0, $size, array_fill(0, $size, 0));
    }

    // Add an edge between two vertices
    public function addEdge($vertex1, $vertex2)
    {
        if ($vertex1 >= 0 && $vertex1 < $this->vertices && $vertex2 >= 0 && $vertex2 < $this->vertices) {
            $this->adjMatrix[$vertex1][$vertex2] = 1;
            $this->adjMatrix[$vertex2][$vertex1] = 1;  // Assuming an undirected graph
        }
    }

    // Display the adjacency matrix
    public function display()
    {
        for ($i = 0; $i < $this->vertices; $i++) {
            for ($j = 0; $j < $this->vertices; $j++) {
                echo $this->adjMatrix[$i][$j] . " ";
            }
            echo "\n";
        }
    }
}

// Example usage
$graphMatrix = new GraphMatrix(4);
$graphMatrix->addEdge(0, 1);
$graphMatrix->addEdge(0, 2);
$graphMatrix->addEdge(1, 3);
$graphMatrix->display();

/* Output:
0 1 1 0
1 0 0 1
1 0 0 0
0 1 0 0
*/
