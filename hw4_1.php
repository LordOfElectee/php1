<?php
$files = [
    "./image1.jpg",
    "./image2.jpg",
    "./image3.jpg",
]
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
           width: 150px;
           height: 200px;
       }
    </style>
</head>
<body>
    <div class="window">
       <?php
            foreach ($files as $value) {
                echo "<div class=\"card\"><a href=\"$value\" target=\"_blank\"><img src=\"$value\"" . "></a></div>";
            }
       ?>
    </div>
</body>
</html>