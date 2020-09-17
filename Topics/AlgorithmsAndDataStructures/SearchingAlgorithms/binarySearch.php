<?php
/*
Binary Search in PHP
!!!!!!!!!!!!!!!!!!!!
In Binary Search elements have to be sorted
!!!!!!!!!!!!!!!!!!!!
Time Complexity = logN
We have n, n/2, n/4, n/8,...
*/

function binarySearch($list, $element) {
    $listSize = count($list);
    $start = 0;
    $end = $listSize - 1;

    while($start <= $end) {

        $middle = floor(($start + $end) / 2);

        if($list[$middle] == $element) {
            return true;
        } elseif($list[$middle] < $element) {
            $start = $middle + 1;
        } else {
            $end = $middle - 1;
        }
    }
    return false;
}

// TEST
$elements = [-4, 0, 9, 21, 34, 44, 67, 88, 99, 101, 221];
$element = 221;

if(binarySearch($elements, $element)) {
    print "<b>Found element $element in list: </b>";
    var_dump($elements);
} else {
    print "<b>Didn't find element $element in list: </b>"; var_dump($elements);
}

