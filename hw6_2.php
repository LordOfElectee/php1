<?php
    $link = mysqli_connect('localhost', 'root', '', 'php1');
    $res = mysqli_query($link, "SELECT id, good, im_adr FROM goods");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 300px;
        }
    </style>
</head>
<body>
    <?
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<img src=\"" . $row['im_adr'] . "\"><br>";
                $comments = mysqli_query($link, "SELECT $row[id], comment, good_id FROM comments");
                while ($comment = mysqli_fetch_assoc($comments)){
                    if ($comment['good_id'] == $row['id']) {
                        echo $comment['comment'] . "<br>";
                    }
                }
            echo "<form action=\"comment.php\" method=\"POST\"><input type=\"text\" name=\"good" . $row['id'] . "\"><input type=\"submit\"></form>";
            echo "<hr>";
        }
    ?>
</body>
</html>