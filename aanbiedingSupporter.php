<?php
    include_once('classes/Aanbieding.php');

    $aanbieding = new Aanbieding();
    $aanbieding->feed();

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

    <h1>Aanbiedingen</h1>

    <div>
        <?php foreach($aanbieding->Feed() as $f): ?>

            <p><?php echo $f['name']; ?></p>
            <p><?php echo $f['price']; ?></p>

        <?php endforeach; ?>
    </div>


    <?php include_once("includes/navSupporter.inc.php") ?>

</div>
</body>
</html>