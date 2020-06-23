<?php
$link = mysqli_connect('localhost','root','','php1');
$id = (int)$_GET['id'];
$sql = "SELECT address FROM images WHERE id = $id";
$result = mysqli_query($link, $sql);
$address = mysqli_fetch_assoc($result);
echo "<img src=\"$address[address]\">";
?>