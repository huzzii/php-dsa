<?php 


class Node{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
    }
}

class CircularLinkedList{
    public $tailNode;
    public $count;

    public function __construct(){
        $this->tailNode = null;
        $this->count = 0;
    }

    public function insertFirst($data){
        $newNode = new Node($data);
        if ($this->tailNode === null) {
            $this->tailNode = $newNode;
            $this->tailNode->next = $this->tailNode;
        } else {
            $newNode->next = $this->tailNode->next;
            $this->tailNode->next = $newNode;
        }
        $this->count++;
        $this->display();
        echo "\n";
    }

    public function display(){
        $current = $this->tailNode->next;
        while ($current !== $this->tailNode) {
            echo $current->data . "->";
            $current = $current->next;
        }
        echo $this->tailNode->data;
    }



}

$circLinkedList = new CircularLinkedList();

$circLinkedList->insertFirst(1);
// var_dump($circLinkedList->tailNode);
$circLinkedList->insertFirst(2);
$circLinkedList->insertFirst(3);

?>