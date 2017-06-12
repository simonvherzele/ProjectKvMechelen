<?php
session_start();

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
        <header>
        <a id="logoZonderTekst" href="#">logo</a>
        <a id="logout" href="classes/Logout.php">Logout</a>
        </header>


        <h1>Profile</h1>

        <img id="profilePic" src="images/account.png" alt="account">

        <div id="profile">
            <p><?php echo $_SESSION['firstname']; ?></p>
        </div>

        <h1 id="kakske"><?php echo $_SESSION['kakskes']; ?></h1>

    <nav>
    <a id="aanbieding" href="index.php">aanbiedingen</a>
    <a id="inruilshop" href="shop.php">shop</a>
    <a id="account" href="profile.php">account</a>
    </nav>

<hr id="bottomLine">

    </div>
</body>
</html>