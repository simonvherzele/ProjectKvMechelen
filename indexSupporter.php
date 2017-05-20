<?php
	include_once 'classes/AanbiedingUpload.php';
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

		<?php include_once("includes/headerSupporter.inc.php") ?>

		<section id="content">
			<?php foreach ($res as $key => $p) : ?>
			<div class="aanbieding">
					<p><?php echo $p['name']; ?></p>
					<p><?php echo $p['price']; ?></p>
			</div>
			<?php endforeach; ?>
		</section>

		<?php include_once("includes/navSupporter.inc.php") ?>
		
	</div>
</body>
</html>