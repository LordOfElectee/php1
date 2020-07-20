<?php
session_start();

if ($_GET['good'] == 1) {
    if ($_GET['operation'] == 'add') $amount = ++$_SESSION['goods'][1]['amount'];
    if ($_GET['operation'] == 'reduce') $amount = --$_SESSION['goods'][1]['amount'];
    $arr = array('id' => 1, 'name' => 'телефон 1', 'price' => 200, 'amount' => $amount);
    $_SESSION['goods'][1] = $arr;
    if ($_SESSION['goods'][1]['amount'] == 0) unset($_SESSION['goods'][1]);
}

if ($_GET['good'] == 2) {
    if ($_GET['operation'] == 'add') $amount = ++$_SESSION['goods'][2]['amount'];
    if ($_GET['operation'] == 'reduce') $amount = --$_SESSION['goods'][2]['amount'];
    $arr = array('id' => 2, 'name' => 'телефон 2', 'price' => 400, 'amount' => $amount);
    $_SESSION['goods'][2] = $arr;
    if ($_SESSION['goods'][2]['amount'] == 0) unset($_SESSION['goods'][2]);
}

if ($_GET['good'] == 3) {
    if ($_GET['operation'] == 'add') $amount = ++$_SESSION['goods'][3]['amount'];
    if ($_GET['operation'] == 'reduce') $amount = --$_SESSION['goods'][3]['amount'];
    $arr = array('id' => 3, 'name' => 'телефон 3', 'price' => 700, 'amount' => $amount);
    $_SESSION['goods'][3] = $arr;
    if ($_SESSION['goods'][3]['amount'] == 0) unset($_SESSION['goods'][3]);
}



header("Location: $_SERVER[HTTP_REFERER]");