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
    public function insertLast($data){
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
        $this->count++;
        $this->display();
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
        $this->count++;
        $this->display();
    }

    public function insertAt($data, $position){
        $newNode = new Node($data);
        if ($position === 0) {
            $this->insertFirst($data);
        } else {
            $current = $this->headNode;
            for ($i=1; $i < $position; $i++) { 
                $current = $current->next;
            }
            $newNode->next = $current->next;
            $current->next = $newNode;
        }
        $this->count++;
        $this->display();
    }
    
    public function deleteFirst(){

        if ($this->headNode !== null) {
            if ($this->headNode->next !== null) {
                $this->headNode = $this->headNode->next;
                $this->count--;
                $this->display();
            } else {
                $this->headNode = null;
            }
        } else {
            echo "list is already empty";
        }
    }

    public function deleteLast(){
        if ($this->headNode !== null) {
            if ($this->headNode->next !== null) {
                $current = $this->headNode;
                $prev = $this->headNode;
                while ($current->next !== null) {
                    $prev = $current;
                    $current = $current->next;
                }
                $prev->next = null;
                $this->count--;
                $this->display();
            } else {
                $this->headNode = null;
            }
        } else {
            echo "list is already empty";
        }
    }

    public function delete($data){
        if($this->headNode != null){
            //if the data is the 'headnode' call delete first method
            if($this->headNode->data == $data){
                $this->deleteFirst();
            }
            if($this->headNode->next != null){
                $prev = null;
                $current = $this->headNode;
                //traverse the list
                while($current->next != null){
                    //if the data matches the current node's data we are iterating..
                    if($current->data === $data){
                        //if we are at last..
                        if($current->next == null){
                            $prev->next  = null;
                        }else{
                            // else point the previous node's next pointer to point to the current node we are iterating next node.
                            $prev->next = $current->next;
                        }
                    }
                    //keep track of the previous node while we are iterating
                    $prev = $current;
                    $current = $current->next;
                }
            }

            $this->display();
            $this->count--;
        }
    }

    public function display(){
        $current = $this->headNode;
        while ($current !== null) {
            echo $current->data . "->";
            $current = $current->next;
        }
        echo "null\n";
    }

}

$linkedList = new LinkedList(3);
$linkedList->insertLast(1);
$linkedList->insertLast(2);
$linkedList->insertLast(3);
$linkedList->insertFirst(0);
$linkedList->insertFirst(-1);
$linkedList->insertAt(0.5, 3);
$linkedList->deleteFirst();
$linkedList->deleteFirst();
$linkedList->deleteLast();
// $linkedList->deleteLast();
$linkedList->delete(10);
// var_dump($linkedList); 

?>