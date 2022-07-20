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
        echo "HeadNode \n";
        $current = $this->headNode;
        while ($current !== null) {
            echo $current->data . "->";
            $current = $current->next;
        }
        echo "null\n";
        echo "TailNode \n";
        $current = $this->tailNode;
        while ($current !== null) {
            echo $current->data . "->";
            $current = $current->prev;
        }
        echo "null\n";
        echo "_________________________________\n";
        
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
        $this->count++;
    }

    public function insertAtPos($data, $pos){
        if ($this->headNode !== null) {
            $current = $this->headNode;

            for ($i=0; $i < $pos; $i++) { 
                $current = $current->next;
                echo $i . "\n";
            }
            $newNode = new Node($data);
            $prevNode = $current->prev;
            $newNode->prev = $prevNode;
            $newNode->next = $current;
            $current->prev = $newNode;
            $prevNode->next = $newNode;
            $this->count++;
            $this->display();

        } else {
            return "Empty linked list";
        }
    }

    public function insertAtLast($data){
        if ($this->headNode === null) {
            $this->headNode = new Node($data);
            $this->tailNode = new Node($data);
        } else {
            $newNode = new Node($data);
            $prevTailNode = $this->tailNode;
            $this->tailNode = $newNode;
            $this->tailNode->prev = $prevTailNode;
            $prevTailNode->next = $newNode;
        }
        $this->count++;
        $this->display();
    }

    public function deleteHead(){
        if ($this->headNode !== null) {
            $this->headNode = $this->headNode->next;
            $this->headNode->prev = null;    
        }
        $this->count--;
        $this->display();
    }

    public function deleteLast(){
        if ($this->tailNode !== null) {
            if ($this->tailNode->prev == null) {
                $this->headNode = null;
                $this->tailNode = null;
            } else {
                $this->tailNode = $this->tailNode->prev;
                $this->tailNode->next = null;
            }
            $this->count--;
            $this->display();
        }
    }

    // public function delete($data){
    //     if ($this->headNode->data === $data) {
    //         $this->deleteHead();
    //     } else if($this->headNode !== null){
    //         $current = $this->headNode;
    //         for ($i=0; $i < $this->count; $i++) { 
    //             if ($current->data = $data) {
    //                 $prevNode = $current->prev;
    //                 $nextNode = $current->next;
    //                 $prevNode->next = $nextNode;
    //                 $nextNode->prev = $prevNode;
    //             }
    //             $current = $current->next;
    //         }
    //     }
    //     $this->count--;
    //     $this->display();
    // }

    public function reverse(){
        $prev = null;
        $currentNode = $this->headNode;
        $nextNode = null;

        while($currentNode != null){
            $nextNode = $currentNode->next;
            $currentNode->next = $prev;
            $prev = $currentNode;
            $currentNode = $nextNode;
        }

        $this->headNode = $prev;

        $this->display();
    }


    public function displayRecursive($node){
        if($node == null){
           return;
        }


        $this->displayRecursive($node->next);
        echo $node->data , "->";
    }


    public function removeDuplicates(){
        echo "Before duplicates\n";
        $this->display();
        $nodeToBeCompared = $this->headNode;

        while($nodeToBeCompared->next != null){
            $comparingNode = $nodeToBeCompared;
            while($comparingNode->next != null){
                if($nodeToBeCompared->data === $comparingNode->next->data){
                    $comparingNode->next = $comparingNode->next->next;
                }

                $comparingNode = $comparingNode->next;
            }

            $nodeToBeCompared = $nodeToBeCompared->next;
        }
        echo "After removing duplicates\n";
        $this->display();

    }

    public function removeDuplicatesInSortedList(){
        $nodeToBeCompared = $this->headNode;
        echo "Before duplicates\n";
        $this->display();

        while($nodeToBeCompared->next != null){


            if($nodeToBeCompared->data == $nodeToBeCompared->next->data){
                $nodeToBeCompared->next = $nodeToBeCompared->next->next;
            }

            $nodeToBeCompared = $nodeToBeCompared->next;
        }

        echo "After removing duplicates\n";

        $this->display();
    }
}

// $dl = new DoublyLinkedList;
// $dl->insertAtFirst(3);
// $dl->insertAtFirst(2);
// $dl->insertAtFirst(1);
// $dl->insertAtFirst(0);
// $dl->insertAtFirst(-1);
// $dl->insertAtPos(4,1);
// $dl->insertAtLast(11);
// $dl->deleteHead();
// $dl->deleteLast();
// $dl->delete(1);
?>