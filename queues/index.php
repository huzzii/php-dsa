<?php 

//Queues have two methods  : enqueue and dequeue
//Queues follows FIFO (First In First Out)
//enqueue methods add a value at last of the queue
//dequeue method removes the first value from the queue

class Queue {
    public $data = [];
    public $count = 0;

    public function enqueue($data){
        array_push($this->data, $data);
        $this->count++;
    }

    public function dequeue(){
        array_shift($this->data);
        $this->count--;
    }

    public function display(){
        if ($this->count > 0) {
            foreach ($this->data as $array_value) {
                echo $array_value . "->";
            }
            echo "\n";
        }
    }
}

$queue = new Queue;
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
$queue->display();
$queue->dequeue();
$queue->display();
$queue->dequeue();
$queue->display();
$queue->enqueue(6);
$queue->display();

?>