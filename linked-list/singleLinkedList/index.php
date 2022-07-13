<?php
class Node{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

// var_dump(new Node(2));

class LinkedList{
    public $headNode = null;
    public $count = 0;

    //insert a data in a LinkedList at last => time complexity O(n)
    public function insert($data){
        $newNode = new Node($data);

        if($this->headNode == null){
            $this->headNode = $newNode;
        }else{
            $current = $this->headNode;
            while($current->next !== null){
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    //insert a data ina LinkedList at first => time complexity O(1)
    public function insertFirst($data){
        $newNode = new Node($data);
        if ($this->headNode === null) {
            $this->headNode = $newNode;
        } else {
            $currentHead = $this->headNode;
            $this->headNode = $newNode;
            $newNode->next = $currentHead;
        }
    }

}

$linkedList = new LinkedList(3);
$linkedList->insert(1);
$linkedList->insert(2);
$linkedList->insert(3);
$linkedList->insertFirst(0);
$linkedList->insertFirst(-1);
var_dump($linkedList); 

?>