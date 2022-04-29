<?php

//
//class linkedlist{
//    public $value;
//    public $next;
//
//    function __construct($value,$next=null)
//    {
//        $this->value=$value;
//        $this->next=$next;
//    }
//
////    public function print_list($head){
////        $p=$head;
////        while ($p !=null){
////            print ($p.value);
////            $p=$p->next;
////        }
////    }
//}
//
//$node1=new linkedlist(1);
//$node2=new linkedlist(2);
//$node3=new linkedlist(3);
//$node4=new linkedlist(4);
//
//$node1->next=$node2;
//$node2->next=$node3;
//$node3->next=$node4;
//
//$head=$node1;
//
//print_r($head);
//?>
<!---->
<?php
//node structure
//class Node {
//    public $data;
//    public $next;
//}
//
//class LinkedList {
//    public $head;
//
//    //constructor to create an empty LinkedList
//    public function __construct(){
//        $this->head = null;
//    }
//};
//
//// test the code
////create an empty LinkedList
//$MyList = new LinkedList();
//
////Add first node.
//$first = new Node();
//$first->data = 10;
//$first->next = null;
////linking with head node
//$MyList->head = $first;
//
////Add second node.
//$second = new Node();
//$second->data = 20;
//$second->next = null;
////linking with first node
//$first->next = $second;
//
////Add third node.
//$third = new Node();
//$third->data = 30;
//$third->next = null;
////linking with second node
//$second->next = $third;
?>

<?php
//node structure
class Node {
    public $data;
    public $next;
}

class LinkedList {
    public $head;

    //constructor to create an empty LinkedList
    public function __construct(){
        $this->head = null;
    }

    //display the content of the list
    public function PrintList() {
        $temp = new Node();
        $temp = $this->head;
        if($temp != null) {
            echo "The list contains: ";
            while($temp != null) {
                echo $temp->data." ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
};

// test the code
//create an empty LinkedList
$MyList = new LinkedList();

//Add first node.
$first = new Node();
$first->data = 10;
$first->next = null;
//linking with head node
$MyList->head = $first;

//Add second node.
$second = new Node();
$second->data = 20;
$second->next = null;
//linking with first node
$first->next = $second;

//Add third node.
$third = new Node();
$third->data = 30;
$third->next = null;
//linking with second node
$second->next = $third;

//print the content of list
$MyList->PrintList();
?>
