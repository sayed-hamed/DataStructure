<?php


//function binarysearch(array $arr,$x){
//    if (count($arr)==0){
//        return false;
//    }
//
//    $low=0;
//    $high=count($arr)-1;
//
//    while ($low <= $high){
//        $mid=floor(($low+$high)/2);
//
//        if ($arr[$mid]==$x){
//            return  true;
//        }
//        if ($x<$arr[$mid]){
//            $high=$mid+1;
//        }else{
//            $low=$mid+1;
//        }
//    }
//
//    return false;
//
//}
//$arr = array(1, 2, 3, 4, 5);
//$value = 5;
//if(binarySearch($arr, 0, count($arr) - 1, $value) == true) {
//    echo $value." Exists";
//}
//else {
//    echo $value." Doesnt Exist";
//}


function binarySearch(Array $arr, $start, $end, $x){
    if ($end < $start)
        return false;

    $mid = floor(($end + $start)/2);
    if ($arr[$mid] == $x)
        return true;

    elseif ($arr[$mid] > $x) {

        // call binarySearch on [start, mid - 1] لو المنتصف كبير عن x
        return binarySearch($arr, $start, $mid - 1, $x);
    }
    else {

        // call binarySearch on [mid + 1, end]لو المنتصف اصغر من x
        return binarySearch($arr, $mid + 1, $end, $x);
    }
}

// Driver code
$arr = array(1, 2, 3, 4, 5);
$value = 6;
if(binarySearch($arr, 0, count($arr) - 1, $value) == true) {
    echo $value." Exists";
}
else {
    echo $value." Doesnt Exist";
}