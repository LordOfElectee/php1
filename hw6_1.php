<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hw6_1_count.php" method="GET">
        <input type="number" name="num1">
        <select name="sign" id="sign">
            <option value="summ">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="devide">/</option>
        </select>
        <input type="number" name="num2">
        <input type="submit">
    </form>
<?php
    echo $_GET['result'];
?>
</body>
</html>