<?php 
class Node {
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}
function detectCycle($node){
    $hare = $node->next; 
    $tortoise = $node; 
    while ($hare !== null && $tortoise !== null && $hare->next !== null) {
        if ($hare === $tortoise) {
            return true;
        }else{
            $hare = $hare->next->next;
            $tortoise = $tortoise->next;
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
$fifthData->next = null; 
var_dump(detectCycle($firstData));
?>