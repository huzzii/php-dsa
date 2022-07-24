<?php 

//Stacks have two methods  : push and pop
//Stack follows LIFO (Last In First Out)
//push methods add a value at last of the stack
//pop method removes the last value from the stack

class Stack {
    public $data = [];
    public $count = 0;

    public function push($data){
        array_push($this->data, $data);
        $this->count++;
    }

    public function pop(){
        array_pop($this->data);
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

$stack = new Stack;
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->display();
$stack->pop();
$stack->display();
$stack->pop();
$stack->display();
$stack->push(4);
$stack->display();

?>