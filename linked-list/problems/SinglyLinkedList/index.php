<?php 
require_once "../../singleLinkedList/index.php";

$linkedList = new LinkedList(3);
$linkedList->insertLast(1);
$linkedList->insertLast(1);
$linkedList->insertLast(1);
$linkedList->insertLast(1);
$linkedList->insertLast(2);
$linkedList->insertLast(2);
$linkedList->insertLast(3);
$linkedList->insertLast(3);
//displaying the linked list recursive approach
// $linkedList->displayRecursive($linkedList->headNode);
// echo "\n";

//reversig the linked list recursive approach
// $linkedList->displayReverseRecursive($linkedList->headNode);
// echo "\n";

//reversing the linkedList iterative approach
// $linkedList->reverseIterative();

//remove e values from unsorted array;
// $linkedList->removeDuplicatesUnsorted();

//remove duplicate values from sorted array;
$linkedList->removeDuplicatesSorted();
?>