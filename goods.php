<?php
    session_start();
//    var_dump($_SESSION);
//    session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
    <style>
    .goods {
        display: flex;
        margin-top: 50px;
        justify-content: space-evenly;
    }

    .good {
        width: 300px;
        height: 350px;
        border: 1px solid gray;
    }
    .good img {
        width: 300px;
    }
    </style>
</head>
<body>
    <a href="cart.php">Перейти в корзину</a>
    <div class="goods">
        <div class="good">
            <img src="tel1.jpg" alt="телефон 1">
            <a href="checkout.php?good=1&operation=add">Купить</a>
        </div>
        <div class="good">
            <img src="tel2.jpg" alt="телефон 2">
            <a href="checkout.php?good=2&operation=add">Купить</a>
        </div>
        <div class="good">
            <img src="tel3.jpg" alt="телефон 3">
            <a href="checkout.php?good=3&operation=add">Купить</a>
        </div>
    </div>
</body>
</html>

