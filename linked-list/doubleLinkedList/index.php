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
    public $headNode;
    public $tailNode;
    public $count;

}

?>