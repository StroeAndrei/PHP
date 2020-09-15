<?php

// String = series of characters
// 1 character = 1 byte
// Ex:
print 'Learning php';

// Escaping characters
// \ = treat the following character as a literal
print 'World\'s finest cookie.';

// Print HTML elements
print '<ul>
<li>One</li>
<li>Two</li>
<li>Three</li>
</ul>';

// Double quotes interpret variables and special characters
// \n=new line; \r=carriage return; \t=tab; \\=\; \$=$
// \" = "; etc

// Here document (heredoc) sintax = used to define strings on multiple lines
// sintax -> <<< and an indentifier
// Ex:
echo <<<PRINTHTML
<html>
    <head>
        <title>Webpage</title>
    </head>
    <body>
        <h1>Page Title</h1>
    </body>
<html>
PRINTHTML;

// For string concatenation we use "."
echo 'first string ' . ' second string';
echo '<br>'; // add line break in HTML
echo 'price: ' . '30000$';

// Variables = hold the data that the program needs
// In PHP they are marked by the "$" sign followed by a name
// = operator for assignment
$txt = <<<TXT
    <hr>
    Today a day <br>
    Tomorrow another
    <hr>
TXT;

print $txt;

// Declare a variable with a string as a value
$myName = 'jim';
echo $myName;
print '<br>';

// Variable names may include: uppercase/lowercase letters
// digits and underscore
// The first character of a variable name is not allowed to be a digit
// Also: $shoe-size = invalid
// We don't use special chars inside the variable name: $var*%iable
// OBS: Variable names are case-sensitive

// Functions for string manipulations

// trim() = removes whitespace from the begining and the end of a string
// strlen() = length of a string
$_POST['zipcode'] = '  43567   ';
$zipcode = trim($_POST['zipcode']); # eliminate whitespaces
$zipcodeLength = strlen($zipcode); # get the length of the string
if($zipcodeLength != 5):
    echo "zip code must be 5 characters long";
else:
    echo "zip code accepted";
endif;

// shortcut
if(strlen(trim('    A    ')) !== 1):
    print 'greater than 1 character';
endif;
print '<br>';

// Comparing strings - we use the '==' operator
// When using == case is important

$name = 'Bob';
if($name == 'Bob') {
    echo $name;
} else {
    echo 'Wrong name';
}
echo '<hr>';

// strcasecmp() - compares two strings while ignoring differences in capitalization
// returns 0 if they are the same

$name = 'valelonga';
if(strcasecmp($name, 'VaLelonGa') == 0) {
    print 'Same string<br>';
}

// printf() = printf() from C
// gives more control over how the output looks
$unitPrice = 3.21;
$quantity = 112;
printf("Total: %.1f$<br>", $unitPrice * $quantity);

// strtolower() = all-lowercase
// strtoupper() = all-uppercase

echo strtolower('OZ');
echo strtoupper('bob');
echo '<br>';

// ucwords() = uppercases the first letter of each word in a string
$name = 'JAMES GUNSHOT';
print ucwords(strtolower($name));
echo '<hr>';

// substr() = extract just part of a string
$longWord = 'adkjalkjanckjbahbahghjaghjabkncbakjbckjankjandjkahdkjabdkandkjl';
// We want to grab just the first 10 bytes
$onlyTen = substr($longWord, 0, 10);
print $onlyTen . '...' . '<br>';
// substr('A', 'B', 'C')
// A = string to work with
// B = the starting position of the substring to extract
// OBS: if B is negative number - counts back from the end of the string
// C = number of bytes to extract
// If C is not specified, it extracts everything from B->...
$lastLetter = substr($longWord, -1, 1);
print $lastLetter . '<br>';

// str_replace() = changes part of a string
// It looks for a substring and replaces the substring with a new string
$htmlCode = '<span class="{class}">Cookie</span>
<span class="{class}">Cake</span>';
$myClass = 'food';
print str_replace('{class}', $myClass, $htmlCode) . '<hr>';

// Numbers - with decimals and without
// floating-point numbers and integers

// Math operations
print 2 + 2 . '<br>';
print 17 - 3.5 . '<br>';
print 90 / 2 . '<br>';
print 4 * 67 . '<br>';
print 2**3 . '<br>';
print 5 % 2 . '<br>';

// For precedence use ()
// Ex: (2 + 2) * 3 = first add then multiply

// Shorthand for adding
$price = 89;
$price += 3;
// It works the same for all operations

// Incrementation & Decrementation
// ++ increment
// -- decrement

$salary = 199;
print(++$salary) . '<br>';
print(--$salary) . '<br>';

// Variables inside strings
// Double quoted strings - We can interpolate variables into them
// It means that if a string contains a variable name, the variable
// name is replaced by the value of the variable

$email = "jimjones@gmail.com";
print "Send message to: $email";

// Interpolation in heredoc
$listName = 'Menu';
$dessert = 'Cake';
$mainDish = 'Fried Fish';

print <<<MENU
<h4>$listName<h4>
<ul>
    <li>$mainDish</li>
    <li>$dessert</li>
</ul>
MENU;

// nowdoc - similar with heredoc but it is noninterpolating
// sintax <<<'NOWDOC'

// We can use curly braces around a variable name to avoid confusions
$process = 'Grill';
$meat = 'Fish';
print "{$process}ed $meat with Butter sauce";





























