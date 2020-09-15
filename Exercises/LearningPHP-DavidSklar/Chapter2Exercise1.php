<?php
/*
1. Find the errors in the PHP program:
<? php
print 'How are you?';
print 'I'm fine.';
??>
*/

/*
1. Space between <? and 'php'
2. Didn't escape ' from 'I'm fine.'
3. Two '??' signs at the closing php tag
4. Formatting: a space after '?'
Correct would be:
*/
?>

<?php
print 'How are you?';
print ' I\'m fine.';
?>
