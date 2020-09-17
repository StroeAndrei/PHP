<?php
/*
Linear Search Algorithm in PHP
We iterate over the array of elements and we
compare each time with the element we are searching
for.
*/

function linearSearch($list, $element) {
    for($i = 0; $i < count($list); $i++) {
        if($list[$i] == $element) {
            return true;
        }
    }
    return false;
}

// TEST
$elements = [34, 7, 13, 19, 21, 53, 0, -45, -32, 101];
$element = 90;

if(linearSearch($elements, $element)) {
    print "<b>Found element $element in list: </b>";
    var_dump($elements);
} else {
    print "<b>Didn't find element $element in list: </b>";
    var_dump($elements);
}