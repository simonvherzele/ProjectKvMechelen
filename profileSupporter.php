<?php
include_once("includes/no-session.inc.php");


?><!doctype html>
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

        <h1>Profile</h1>

        <img id="profilePic" src="images/account.png" alt="account">

        <div id="profile">
            <p><?php echo $_SESSION['email']; ?></p>
        </div>

        <h1 id="kakske">500</h1>

        <?php include_once("includes/navSupporter.inc.php") ?>

    </div>
</body>
</html>