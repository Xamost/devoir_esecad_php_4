<?php
    session_start();
    include ('../script/functions.php');
    $mysqli = mysql_connection();
    $result = $mysqli->query('SELECT product_name, product_price FROM product');
    while ($data = $result->fetch_row()) $products[] = $data;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="stylesheet" href="../css/normalize.css"/>
    <link rel="stylesheet" href="../css/master.css"/>
</head>
<body>
    <header>
        <div class="page_title"><h1>Shop</h1></div>
    </header>
    <div class="disconnect"><a class="button" href="../script/logout.php">Déconnection</a></div>
    <article>
        <?php
            foreach ($products as $key => $value)
            {
                echo '<div class="products"><a class="product_link" href="../script/cart.php?product_id='. $key .'"><h4 class="product_name">'. $value[0] .'</h4><h5 class="product_price">'. $value[1] . ' €</h5></a></div>';
            }
        ?>
    </article>
</body>
</html>