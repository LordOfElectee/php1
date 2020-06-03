<?php
    $title = 'Название этой прекрасной страницы';
    $head1 = 'Суперзаголовок!';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "<title>$title</title>"; ?>
</head>
<body>
    <?php echo "<h1>$head1</h1>";
        echo date("Y");

        $a = 1;
        $b = 2;
        $a += $b;
        $b = $a - $b;
        $a -= $b;
        echo "<br>" . $a . " " . $b;
    ?>
</body>
</html>