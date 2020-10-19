<?php
function countNumbers($number,$num){
    $count=0;

    for ($i = 0; $i < count($number) ;$i++) {
        if($number[$i]==$num){
             $count++;
        }
    }
    return $count;
}
echo countNumbers([1,4,3,2,5,2,6,2,7,1,8,5,4],2);
