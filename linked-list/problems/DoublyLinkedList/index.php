<?php 
require_once "../../doubleLinkedList/index.php";

$linked = new DoublyLinkedList;
$linked->insertAtLast(1);
$linked->insertAtLast(1);
$linked->insertAtLast(2);
$linked->insertAtLast(2);
$linked->insertAtLast(3);



$linked->removeDuplicatesInSortedList();

?>