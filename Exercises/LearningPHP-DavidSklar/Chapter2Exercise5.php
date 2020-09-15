<?php
/*
5. Write a PHP program that uses the increment operator (++) and the combined
multiplication operator (*=) to print out the numbers from 1 to 5 and powers
of 2 from 2 (2^1) to 32 (2^5).
*/

# We increment the value of number to output from 1 to 5
$number = 0;
print 'From 1 to 5: ' . ++$number . ' ' . ++$number . ' ' .
        ++$number . ' ' . ++$number . ' ' . ++$number . '<br>';

print('Powers of 2 from 2^1 to 2^5:' . '<br>');

# Use ** operator to raise to a n-th power
print 'Version A: ' . 2**1 . ' ' . 2**2 . ' ' .
        2**3 . ' ' . 2**4 . ' ' . 2**5 . '<br>';

# Use *= as requested to raise to the n-th power
$n1 = $n2 = $n3 = $n4 = $n5 = 2;

$n1 *= 1;
$n2 *= $n1;
$n3 *= $n2;
$n4 *= $n3;
$n5 *= $n4;

print 'Version B: ' . $n1 . ' ' . $n2 . ' ' .
        $n3 . ' ' . $n4 . ' ' . $n5 . '<br>';

// Probably this exercise has the purpose to prove the advantages of
// using loops later in the book.

?>