<?php
/*
Linear Search with Sentinel in PHP
We add a sentinel at the end of the array. If we don't find the
element we are searching for we increment i by 1. At the end if
i will have the size of the array - that means we didn't find our
element. Otherwise we found the element. The advantage of linear
search with sentinel is that we don't do two comparisons
(1 for iteration and 1 for the inner if()).
*/

function sentinelLinearSearch($list, $element) {
    $listSize = count($list);
    $list[$listSize] = $element;

    $i = 0;
    while($list[$i] != $element) {
        $i++;
    }

    if($i == $listSize) {
        return false;
    }
    return true;
}

// TEST
$elements = [34, 7, 13, 19, 21, 53, 0, -45, -32, 101];
$element = 0;

if(sentinelLinearSearch($elements, $element)) {
    print "<b>Found element $element in list: </b>";
    var_dump($elements);
} else {
    print "<b>Didn't find element $element in list: </b>";
    var_dump($elements);
}






