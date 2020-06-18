<?php
    $link = mysqli_connect('localhost','root','','php1');
    $sql = 'SELECT id, address, size, name FROM images';
    $result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .window {
           display: flex;
           justify-content: space-between;
       }

       .card {
           width: 200px;
           height: 200px;
       }

       .card img {
           width: 100%;
       }
    </style>
</head>
<body>
    <div class="window">
       <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class=\"card\"><a href=\"hw5_2.php?id=$row[id]\" target=\"_blank\"><img src=\"$row[address]\"" . "></a></div>";
            }
            
            
       ?>
    </div>
</body>
</html>