<?php

$item = "Ballpen";
$quantity = 10;
$price_per_item = 20;
$discount_rate = 0.10; 
$amount_paid = 300;

$total_before_discount = $quantity * $price_per_item;
$discount = $total_before_discount * $discount_rate;
$total_after_discount = $total_before_discount - $discount;
$change = $amount_paid - $total_after_discount;

echo "Purchase Summary\n";
echo "==========================\n";
echo "Item: $item\n";
echo "Quantity: $quantity\n";
echo "Price per item: P$price_per_item\n";
echo "Total before discount: P$total_before_discount\n";
echo "Discount (10%): P$discount\n";
echo "Total after discount: P$total_after_discount\n";
echo "Amount paid: P$amount_paid\n";
echo "Change: P$change\n";
?>