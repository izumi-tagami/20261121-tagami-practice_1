<?php

$product_name = 'ノートパソコン';
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total = $subtotal + $tax_amount;

echo "商品名: {$product_name}<br> "単価: {$price}円"<br>"数量: {$quantity}個"<br>"小計: {$subtotal}円"<br>"消費税: {$tax_amount}"円"<br>"合計金額: {$total}円";
