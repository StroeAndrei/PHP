<?php
/*
2. Write a PHP program that computes the total cost of this restaurant meal:
two hamburgers at $4.95 each, one chocolate milkshake at $1.95, and one cola
at 85 cents. The sales tax rate is 7.5%, and you left a pre-tax tip of 16%.
*/

# Product prices
$burgerPrice = 4.95;
$chocolateMilkshakePrice = 1.95;
$colaPrice = 0.85;

# Tax and Tip
$salesTaxRate = 7.5;
$preTaxTip = 16;

# Total Price Before Tax
$totalBeforeTax = 2 * $burgerPrice + $chocolateMilkshakePrice + $colaPrice;
printf("Before tax price: %.2f<br>", $totalBeforeTax);

# Total Price After Tax
$totalAfterTax = $totalBeforeTax + ($salesTaxRate * $totalBeforeTax) / 100;
printf("After tax price: %.2f<br>", $totalAfterTax);

# Pre-Tax Tip: applied to the total before tax
$preTaxTip = (16 * $totalBeforeTax) / 100;
printf("Pre-tax tip: %.2f<br>", $preTaxTip);

# Total Bill: total price after tax plus tip
$totalBill = $totalAfterTax + $preTaxTip;
printf("Total bill: %.2f", $totalBill);

// Could use associative arrays and logic but was not covered in chapter 2
// of the book.
?>