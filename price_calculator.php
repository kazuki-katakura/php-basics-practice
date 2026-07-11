<?php
// src/index.php
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Calculator</title>
</head>

<body>
    <p><?php $product_name = "ノートパソコン"; ?></p>
    <p><?php $price = 80000; ?></p>
    <p><?php $quantity = 2; ?></p>
    <p><?php $tax_rate = 0.1; ?></p>
    <p><?php $subtotal = $price * $quantity; ?></p>
    <p><?php $tax_amount = $subtotal * $tax_rate; ?></p>
    <p><?php $total = $subtotal + $tax_amount; ?></p>
    <p><?php echo "商品名: " . $product_name; ?></p>
    <p><?php echo "単価: " . $price; ?>円</p>
    <p><?php echo "数量: " . $quantity; ?>個</p>
    <p><?php echo "小計: " . $subtotal; ?>円</p>
    <p><?php echo "消費税(10%): " . $tax_amount; ?>円</p>
    <p><?php echo "合計: " . $total; ?>円</p>

</body>

</html>