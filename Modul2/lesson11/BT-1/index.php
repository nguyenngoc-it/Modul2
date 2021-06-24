<?php
function countnumber($arr){
    $count=0;
    $value=6;
    foreach ($arr as $num){
        if( $num==$value){
            $count++;
        }
    }
    return $count;
}
$arr=[1,2,3,5,1,2,6,7];
echo countnumber($arr);