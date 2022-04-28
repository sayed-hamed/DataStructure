<?php

// one dimension array

$arr=[[1,2,3,4,5]];

$a=4;

array_unshift($arr,$a); //add to beginning of array
array_shift($arr); //delete from the start
array_push($arr,$a); // add to end of array
array_pop($arr); // delete from the end

print_r($arr);


//foreach ($arr as $r){
//    echo $r;
//}
//echo $arr[0];
//echo $arr[4];

//two dimension array

$ar=[[1,2,3,4,5],[7,6,5,4]];