<?php

class stack{
    public $arr=[];
    public $data;


    public function add($item){
        array_push($this->arr,$item);
    }

    public function delete(){
        array_shift($this->arr);
    }

    public function show(){
        foreach ($this->arr as $r){
            echo $r;
        }
    }


}


$s=new stack();
$s->add(1);
$s->add(2);
$s->add(3);
$s->add(4);
$s->add(5);
$s->add(6);

$s->delete();
$s->delete();

$s->show();