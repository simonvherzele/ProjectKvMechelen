<?php
    include_once('classes/AanbiedingUpload.php');

    if (!empty($_POST)) {
        $aanbiedingName = $_POST['aanbiedingName'];
        $aanbiedingPrice = $_POST['aanbiedingPrice'];

        $aanbieding = new Aanbieding();
        $aanbieding->setName($aanbiedingName);
        $aanbieding->setPrice($aanbiedingPrice);

        $aanbieding->upload();
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
    <?php include_once("includes/header.inc.php") ?>

    <h1>Aanbieding aanvragen</h1>

    <form action="" method="post">
        <label for="aanbiedingName">Name</label>
        <input type="text" name="aanbiedingName" id="aanbiedingName">

        <label for="aanbiedingPrice">Price</label>
        <input type="text" name="aanbiedingPrice" id="aanbiedingPrice">

        <button type="submit">Save</button>
    </form>

    <?php include_once("includes/nav.inc.php") ?>
</body>
</html>