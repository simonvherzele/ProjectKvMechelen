<?php
include_once "classes/Db.php";
include_once "classes/Shop.php";

$shop = new Shop();
$shop->feed();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kv Mechelen</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
    <header>
    <a id="logoZonderTekst" href="#">logo</a>
    <a id="logout" href="classes/Logout.php">Logout</a>
    </header>


        <h1>Inruilshop</h1>
            <?php foreach($shop->Feed() as $f): ?>
                <div class="shopItem">
                    <p><?php echo $f['name']; ?></p><br><br>
                    <p><?php echo $f['price']; ?></p>
                </div>
            <?php endforeach; ?>
    <nav>
    <a id="aanbieding" href="index.php">aanbiedingen</a>
    <a id="inruilshop" href="shop.php">shop</a>
    <a id="account" href="profile.php">account</a>
</nav>


    </div>
</body>
</html>