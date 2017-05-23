<?php
include_once('classes/Shop.php');

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

        <?php include_once("includes/headerSupporter.inc.php") ?>

        <h1>Inruilshop</h1>
            <?php foreach($shop->Feed() as $f): ?>
                <div class="shopItem">
                    <p><?php echo $f['name']; ?></p><br>
                    <p><?php echo $f['price']; ?></p>
                </div>
            <?php endforeach; ?>

        <?php include_once("includes/navSupporter.inc.php") ?>

    </div>
</body>
</html>