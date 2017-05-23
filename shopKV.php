<?php
include_once("includes/no-session.inc.php");
include_once('classes/Shop.php');

    if (!empty($_POST)) {
        $shopName = $_POST['shopName'];
        $shopPrice = $_POST['shopPrice'];

        $shop = new Shop();
        $shop->setName($shopName);
        $shop->setPrice($shopPrice);

        $shop->upload();
    }

    if(!empty($_GET)) {
        $shopSearch = $_GET['shopSearch'];
        $shopS = new Shop();
        try{
            $shopS->setKeyword($shopSearch);
            $shopS->search();
        } catch (Exception $e) {
            $e->getMessage();
        }

    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kv Mechelen</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include_once("includes/headerKV.inc.php") ?>

<h1>Inruilshop item toevoegen</h1>

<div>
    <?php
    if (isset($e)) {
        echo "<p class='error'>$e</p>";
    }
    ?>
</div>

<form action="" method="post">
    <input type="text" name="shopName" id="shopName">

    <input type="text" name="shopPrice" id="shopPrice">

    <button type="submit">Save</button>
</form>

<form action="" method="get">
    <input type="text" name="shopSearch" id="shopSearch">

    <button type="submit">Search</button>
</form>

<div>
    <?php foreach($shopS->getResult() as $s): ?>

        <p><?php echo $s['name']; ?></p>
        <p><?php echo $s['price']; ?></p>

    <?php endforeach; ?>
</div>

<?php include_once("includes/navKV.inc.php") ?>
</body>
</html>