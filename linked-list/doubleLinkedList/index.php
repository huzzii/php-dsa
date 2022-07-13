<?php 
class Node{
    public $data;
    public $next;
    public $prev;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
        $this->prev = null;
    }
}

class DoublyLinkedList{
    public $headNode = null;
    public $tailNode =  null;
    public $count = 0;

    public function display(){
        $current = $this->headNode;
        while ($current !== null) {
            echo $current->data . "->";
            $current = $current->next;
        }
        echo "null\n";
    }

    public function insertAtFirst($data){
        $newNode = new Node($data);

        if ($this->headNode == null) {
            $this->headNode = $newNode;
            $this->tailNode = $newNode;
        } else {
            $prevHeadNode = $this->headNode;
            $this->headNode = $newNode;
            $this->headNode->next = $prevHeadNode;
            $prevHeadNode->prev = $newNode;
        }   
    }
}

$dl = new DoublyLinkedList;
$dl->insertAtFirst(3);
$dl->insertAtFirst(2);
$dl->insertAtFirst(1);
$dl->insertAtFirst(0);
$dl->insertAtFirst(-1);
$dl->display();

?>