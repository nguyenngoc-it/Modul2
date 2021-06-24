<?php
//function selectionSort($array)
//{
//    for ($i = 0; $i < count($array) - 1; $i++) {
//        $max = $i;
//        for ($j = $i + 1; $j < count($array); $j++) {
//            if ($array[$j] > $array[$max]) {
//                $max = $j;
//            }
//        }
//        $array = swapPositions($array, $i, $max);
//    }
//    return $array;
//}
//
//function swapPositions($data, $left, $right)
//{
//    $backupOldDataRightValue = $data[$right];
//    $data[$right] = $data[$left];
//    $data[$left] = $backupOldDataRightValue;
//    return $data;
//}

function selectsort($arr){
    for ($i=0; $i<count($arr)-1; $i++){
        $min= $arr[$i];
        for ($j=$i+1; $j<count($arr); $j++){
            if($arr[$j]>$min){
                $min=$arr[$j];
                $arr[$j]=$arr[$i];
                $arr[$i]=$min;
            }
        }

    }
    return $arr;
}
$array=[1,5,30,7,15,10];
selectsort($array);
print_r(selectsort($array));