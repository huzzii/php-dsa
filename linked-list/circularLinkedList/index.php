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

    public function insertLast($data){
        $newNode = new Node($data);
        if ($this->tailNode === null) {
            $this->tailNode = $newNode;
            $this->tailNode->next = $this->tailNode;
        } else {
            $newNode->next = $this->tailNode->next;
            $this->tailNode->next = $newNode;
            $this->tailNode = $newNode;
        }
        $this->display();
        echo "\n";
    }

    public function insertAt($data, $position){
        $newNode = new Node($data);
        
        $current = $this->tailNode;
        for ($i=0; $i < $position; $i++) { 
            $current = $current->next;
        }
        $positionNode = $current;
        $newNode->next = $positionNode->next;
        $positionNode->next = $newNode;
        $this->count--;
        $this->display();
        echo "\n";
    }


    public function deleteFirst(){
        $currentHead = $this->tailNode->next;
        $this->tailNode->next = $currentHead->next;
        $this->count--;
        $this->display();
        echo "\n";
    }
    
    public function deleteLast(){
        $current = $this->tailNode->next;
        $prev = $this->tailNode->next;
        while ($current !== $this->tailNode) {
            $prev = $current;
            $current = $current->next;
        }
        $prev->next = $this->tailNode->next;
        $this->tailNode = $prev;
        $this->count--;
        $this->display();
        echo "\n";
    }
}

$circLinkedList = new CircularLinkedList();

$circLinkedList->insertFirst(3);
$circLinkedList->insertFirst(2);
$circLinkedList->insertFirst(1);
// var_dump($circLinkedList->tailNode);
$circLinkedList->insertLast(4);
$circLinkedList->insertAt(1.5, 2);
// $circLinkedList->deleteFirst();
// $circLinkedList->deleteLast();
// $circLinkedList->deleteLast();

?>