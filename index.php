<?php
include_once "classes/Db.php";
include_once "classes/Aanbieding.php";

session_start();
if (isset($_SESSION['firstname'])) {
	
}else{
	header('Location: login.php');
}

	$feed = new Aanbieding();
	$res = $feed->feed();

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

        <h1>Dichtsbijzijnde aanbiedingen</h1>

		<section id="content">
			<?php foreach ($res as $key => $p) : ?>
			<div class="aanbieding">
                <p><?php echo $p['name']; ?></p>
                <h1 id="kakske_white"><?php echo $p['price']; ?></h1>
                <p><?php echo $p['company']; ?></p>
			</div>
			<?php endforeach; ?>
		</section>
	<nav>
    <a id="aanbieding" href="index.php">aanbiedingen</a>
    <a id="inruilshop" href="shop.php">shop</a>
    <a id="account" href="profile.php">account</a>
</nav>

		
	</div>
</body>
</html>