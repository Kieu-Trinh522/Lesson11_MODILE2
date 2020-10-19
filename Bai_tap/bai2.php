<?php
function searchNumber($arr, $number)
{
    $left = 0;
    $right = count($arr) - 1;
    while ($left <= $right) {
        $mid = (int)(($left + $right) / 2);
        if ($arr[$mid] > $number) {
            $right = $mid - 1;
        } else if ($arr[$mid] < $number) {
            $left = $mid + 1;
        } else {
            return true;
        }
    }
    return false;
}
$arr=range(1,100,5);
$number= 25;
if (searchNumber($arr, $number)) {
    echo "$number found \n";
}else{
    echo "$number not found \n";
}






