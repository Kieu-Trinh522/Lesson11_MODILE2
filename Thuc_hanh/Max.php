<?php

function findMax($array)
{
    $max = $array[0];
    for ($i = 0; $i < count($array); ++$i) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }

    }
    return $max;
}

$nums = [];
for ($i = 0; $i < 100; ++$i) {
    $nums[$i]=rand(1,101);
}
foreach ($nums as $num){
    echo $num . " ";
}
//$minValue = findMin($nums);
//echo "<br/>";
//echo "The minimum value is: " . $minValue;

$maxValue=findMax($nums);
echo "<br>";
echo "The maxnum value is:".$maxValue;