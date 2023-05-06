<?php
    include ('./functions.php');
    if (empty($_POST))
    {
        redirect('../index.php');
    }

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $mysqli = mysql_connection();
    $result = $mysqli->query('SELECT * FROM user WHERE user_name = "'. $input_username . '"');
    $row = $result->fetch_array();
    if (empty($row) or $row['user_password'] != $input_password)
    {
        redirect('../index.php');
    }
    if($_POST['remember_me'] == "TRUE")
    {
        $log_info = [0 => $input_username, 1 => $input_password];
        setcookie('auto_connect', serialize($log_info), time() + 1296000, '/');
    }
    session_start();
    $_SESSION['user'] = $row;
    redirect('../page/shop.php');
