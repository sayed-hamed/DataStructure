<?php

class queue{
    public $arr=[];
//    public $data;


    public function enqueue($item)
    {
        array_push($this->arr,$item);
    }

    public function dequeue(){
        array_shift($this->arr);
    }

    public function show(){
        foreach ($this->arr as $r){
            echo $r;
        }
    }
}

$q=new queue();
$q->enqueue(1);
$q->enqueue(2);
$q->enqueue(3);
$q->enqueue(4);
$q->enqueue(5);


$q->show();

$q->dequeue();
$q->show();