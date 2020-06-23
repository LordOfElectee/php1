<?php
    $link = mysqli_connect('localhost', 'root', '', 'php1');
    $id = substr(key($_POST), 4);
    $text = $_POST[key($_POST)];
    if(!empty($_POST)) {
        $addComment = "INSERT INTO `comments` (`comment`, `good_id`) VALUES ($text, $id)";
        mysqli_query($link, $addComment);
    }
    header('Location: /hw6_2.php');