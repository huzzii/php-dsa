<?php 
require_once "../singleLinkedList/index.php";

$linkedList = new LinkedList(3);
$linkedList->insertLast(1);
$linkedList->insertLast(2);
$linkedList->insertLast(3);
//displaying the linked list recursive approach
$linkedList->displayRecursive($linkedList->headNode);
echo "\n";

//reversig the linked list recursive approach
$linkedList->displayReverseRecursive($linkedList->headNode);


?>