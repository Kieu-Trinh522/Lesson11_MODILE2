<?php
function findMin($array)
{
    $min = $array[0];
    for ($i = 0; $i < count($array); ++$i) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    return $min;
}

    $nums = [];
    for ($i = 0; $i < 100; ++$i) {
        $nums[$i] = rand(1, 101);
    }
    foreach ($nums as $num) {
        echo $num . " ";
    }
    $minValue = findMin($nums);
    echo "<br>";
    echo "The mininum value is:".$minValue;
