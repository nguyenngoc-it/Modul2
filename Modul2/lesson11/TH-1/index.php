<?php
//function findMin(array $numbers, $num){
//    $low=0;
//    $high= count($numbers)-1;
//    while ($low<= $high){
//        $mid= (($low+$high)/2);
//        if($numbers[$mid]>$num){
//            $high=$mid-1;
//        }
//        elseif ($numbers[$mid]<$num){
//            $low= $mid+1;
//        }
//        else{
//            return true;
//        }
//    }
//    return false;
//
//}
//
//$numbers=range(1,200,5);
//$num=7;
//
//if (findMin($numbers, $num )){
//    echo "$num found \n";
//} else {
//    echo "$num not found \n";
//}

function findMin($arr){
    $min= $arr[0];
    for ($i=0; $i<count($arr); $i++ ){
        if ($arr[$i]<$min){
            $min=$arr[$i];
        }
    }
    return $min;
}

$arr=[1,5,9,5,2,3,5];
foreach ($arr as $num){
    echo $num. " ";
}
$min= findMin($arr);
echo  "</br>";
echo "the minium value is: ".$min;
