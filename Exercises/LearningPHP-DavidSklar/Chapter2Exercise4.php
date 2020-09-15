<?php
/*
4. Write a PHP program that sets the variable $first_name to your first name
and $last_name to your last name. Print out a string containing your first
and last name separated by a space. Also print out the length of that string.
*/

# Set first and last name
$firstName = 'Bob';
$lastName = 'Beans';

# Concatenate first and last name
$fullName = $firstName . ' ' . $lastName;

# Get the length of the name string (+1 empty space)
$fullNameLength = strlen($fullName);

# Output name and length of name
print $fullName . '<br>';
print "Length: " . $fullNameLength . '<br>';

?>