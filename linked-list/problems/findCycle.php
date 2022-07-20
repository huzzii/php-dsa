<?php 
class Node {
    public $data;
    public $next;
    public $visited;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
        $this->visited = false;
    }
}
function detectCycle($node){
    $current = $node;
    if ($current === null) {
        return;
    }
    while ($current->next !== null) {
        if (!$current->visited) {
            $current->visited = !$current->visited; 
            $current = $current->next; 
        }elseif($current->visited === true){
            return true;
        }
    }
    return false;
}

$firstData = new Node(1); 
$secondData = new Node(2); 
$thirdData = new Node(3); 
$fourthData = new Node(4); 
$fifthData = new Node(5); 
$firstData->next = $secondData; 
$secondData->next = $thirdData; 
$thirdData->next = $fourthData; 
$fourthData->next = $fifthData; 
$fifthData->next = $secondData; 
var_dump(detectCycle($firstData));
?>