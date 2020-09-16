<?php

// The if() construct
// It will test the expression inside (). If it is true, it will execute the
// code in {}; if it is false it will move on.
// In PHP everything is true with the exceptions:
// int 0, float 0.0, empty string, string containing only the character 0,
// boolean false, null, empty array

$logged_in = true;
$user = 'Jim';

if($logged_in) {
    print 'Welcome ' . $user . '<br>';
}

// To run other statements when the if() evaluates the expression to false
// we use 'else' clause

$subscribed = false;

if($subscribed) {
    print 'You subscribed.' . '<br>';
} else {
    print 'You didn\'t subscribe yet.' . '<br>';
}

// We use test for multiple conditions by using the elseif() construct
// OBS: We run the first code block where the if()/elseif() evaluates to true
// It doesn't matter if the next one evaluates to true as well
// OBS: Similar to C, you don't need to put curly braces around blocks of code
// where you have just one statement.

$number = 10;
$compareTo = 5;

if($number < $compareTo) {
    print $number . ' < ' . $compareTo . '<br>';
} elseif($number == $compareTo) {
    print $number . ' == ' . $compareTo . '<br>';
} else {
    print $number . ' > ' . $compareTo . '<br>';
}

// = assignment
// == test for equality
// != test for inequality

$age = 18;

if($age != 30) {
    print 'Not 30 years old.' . '<br>';
}

// Comparing strings
// It will compare the ASCII value.
// a = 97 and A = 65 so 97 > 65

if('a' > 'A') {
    print 'a > A' . '<br>';
}

// Strings are compared as if they were being looked up in a dictionary
// Ex: z > c

// dictionary order
if('Indianz' > 'Indians') {
    print "z > s" . '<br>';
}

// If the strings contain only numbers or start with numbers - PHP
// converts them to numbers for the comparison

// numeric order
if('34532' > '35231') {
    print 'String 34532 is greater than 35231' . '<br>';
} else {
    print 'String 34532 is not greater than 35231' . '<br>';
}

// dictionary order
// ASCII: 5 = 53 and 6 = 54 so 6 > 5
if('6bottles' > '3bottles') {
    print 'The string 6bottles is greater than the string 3bottles' . '<br>';
} else {
    print 'The string 6bottles is not greater than the string 3bottles' . '<br>';
}

// numeric order
// '45 people' will be converted to 45 and the comparison will be
// between 45 and 3 so 45 > 3
if('45 people' < 3) {
    print '45 people < 3' . '<br>';
} else {

    print '45 people > 3' . '<br>';
}

// If we want to make sure PHP compares strings using dictionary order
// without converting to numbers, we use the function strcmp()
// strcmp() - always comapres its arguments in dictionary order

$answer = strcmp('34', '90');

if($answer < 0) {
    echo 'string "34" is less than string "90"' . '<br>';
} elseif($answer == 0) {
    echo 'string "34" is equal to string "90"' . '<br>';
} else {
    echo 'string "34" is greater string "90"' . '<br>';
}

// Spaceship operator <=> does comparison similar to strcmp(), but
// for any data type
// Evaluates to a negative number when its lefthand operand is less than the
// righthand operand, a positive number when the righthand operand is bigger,
// and 0 when they are equal

echo (1 <=> 15.5) . '<br>';
echo ('jim' <=> 'ted') . '<br>'; // because t is after j

// The spaceship operator converts "numerical" strings to numbers just like
// ==, <, and the others

// We use '!' to negate a truth value (not logic operator)
// Other logical operators: AND(&&) OR(||)
$haveMoney = true;
$age = 27;

if($age > 18 && $haveMoney) {
    echo 'You can play the game.' . '<br>';
}

$food = 'fried eggs';
$drink = 'mineral water';

if($food || $drink) {
    echo 'Can survive' . '<br>';
}

// Looping structures
// - retrieve a set of rows from a database
// - print rows of an HTML table
// - print list elements of an UL/OL

// while() loop is like a repeating if()
// As long as the expression provided in while's () is true it will execute the
// block of code {}

$i = 0;
print '<ul>';
while($i <= 10) {
    print "<li style=\"color: blue;\">$i</li>";
    $i++; // we increment the value of $i so that the loop will stop
}
print '</ul>';

// for() loop
// similar to while()

for($i = 0; $i <= 20; $i++) {
    echo "<i>$i</i> ";
}
echo '<br>';

for($start = 0, $end = 10, $n = 0; $start <= $end; $start++, $n++) {
    echo "<b>$n</b> ";
}
echo '<br>';






















