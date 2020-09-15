<?php
/*
3. Modify your solution to the previous exercise to print out a formatted bill.
For each item in the meal, print the price, quantity, and total cost. Print
the pre-tax food and drink total, the post-tax total, and the total with tax
and tip. Make sure that prices in your output are vertically aligned.
*/

// Price and Quantity of Products
$burgerPrice = 4.95;
$burgerQuantity = 2;

$chocolateMilkshakePrice = 1.95;
$chocolateMilkshakeQuantity = 1;

$colaPrice = 0.85;
$colaQuantity = 1;

// Sales Tax Rate and Tip
$salesTaxRate = 7.5;
$preTaxTip = 16; // %

// Output information about Products: Price, Quantity and Total
echo '*******************************' . '<br>';
echo 'Product ' . 'Price ' . 'Quantity ' . ' Total' . '<br>';
echo 'Burger ' . $burgerPrice . '$' . ' x ' . $burgerQuantity . ' ' .
    ($burgerQuantity * $burgerPrice) . '$' . '<br>';
echo 'Chocolate Milkshake ' . $chocolateMilkshakePrice . '$' . ' x ' .
    $chocolateMilkshakeQuantity . ' ' .
    ($chocolateMilkshakePrice * $chocolateMilkshakeQuantity) . '$' . '<br>';
echo 'Cola ' . $colaPrice . '$' . ' x ' . $colaQuantity . ' ' .
    ($colaQuantity * $colaPrice) . '$' . '<br>';
echo '*******************************' . '<br>';

// Total Price Before Tax
$totalBeforeTax = 2 * $burgerPrice + $chocolateMilkshakePrice + $colaPrice;
printf("Pre-tax total: %.2f<br>", $totalBeforeTax);

// Total Price After Tax
$totalAfterTax = $totalBeforeTax + ($salesTaxRate * $totalBeforeTax) / 100;
printf("Post-tax total: %.2f<br>", $totalAfterTax);

// Pre-tax Tip
$preTaxTip = (16 * $totalBeforeTax) / 100;
printf("Pre-tax tip: %.2f<br>", $preTaxTip);

// Total Bill: total price after tax plus tip
$totalBill = $totalAfterTax + $preTaxTip;
printf("Total after tax and tip: %.2f", $totalBill);

// To align vertically prices, we need to use html code like a table
// or CSS. This was not covered in chapter 2 of the book.
?>