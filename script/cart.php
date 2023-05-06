<?php
    session_start();
    include('./functions.php');
    if(empty($_GET))
    {
        redirect('../page/shop.php');
    }
    $cart = [];
    if (isset($_COOKIE['cart']))
    {
        $cart = unserialize($_COOKIE['cart']);
    }
    $cart[] = $_GET['product_id'];
    setcookie('cart', serialize($cart), time() + 1296000, '/');
    redirect('../page/shop.php');