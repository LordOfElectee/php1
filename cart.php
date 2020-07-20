<?php
session_start();
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <style>
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <?
        $total = 0;
        foreach ($_SESSION['goods'] as $id) {
            echo "<tr>";
            echo "<td>" . $id['name'] . "</td>";
            echo "<td>" . $id['price'] . " руб.</td>";
            echo "<td>Кол-во = " . $id['amount'] . " шт. <a href=\"checkout.php?good=" . $id['id'] . "&operation=add\">Добавить</a> <a href=\"checkout.php?good=" . $id['id'] . "&operation=reduce\">Удалить 1</a></td>";
            echo "</tr>";
            $total = $total + $id['amount'] * $id['price'];
        }
        ?>
    </table>
<h2>ИТОГО = <? echo $total ?> руб.</h2>
<a href="goods.php">В товары</a>
</body>
</html>