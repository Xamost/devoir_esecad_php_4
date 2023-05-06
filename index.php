<?php
    if (isset($_COOKIE['auto_connect']))
    {
        $log_info = $_COOKIE['auto_connect'];
        $log_info = unserialize($log_info);
        var_dump($log_info);
    }else{
        $log_info = '';
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devoir PHP 4</title>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/master.css"/>
</head>
<body>
    <header>
        <div class="page_title"><h1>Devoir de PHP 4</h1></div>
    </header>
    <form action="./script/login.php" method="post">
        <label>
            <input class="text_input" type="text" name="username" placeholder="Username" value='<?php if ($log_info != '') {echo $log_info[0];} ?>' required/>
        </label>
        <label>
            <input class="text_input" type="password" name="password" placeholder="Password" value='<?php if ($log_info != '') {echo $log_info[1];} ?>' required/>
        </label>
        <div class="checkbox_input">
            <input id="remember_me" type="checkbox" name="remember_me" value="TRUE" placeholder="Rememberme"/>
            <label for="remember_me">Remember me</label>
        </div>
        <input class="button" type="submit" value="Connection"/>
    </form>
</body>
</html>
