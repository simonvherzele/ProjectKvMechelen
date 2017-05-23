<?php
include_once("includes/no-session.inc.php");
include_once ('classes/Aanbieding.php');

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

        <h1>Dichtsbijzijnde aanbiedingen</h1>

		<section id="content">
			<?php foreach ($res as $key => $p) : ?>
			<div class="aanbieding">
                <p><?php echo $p['name']; ?></p>
                <a id="pijl" href="index.php">pijl</a>
			</div>
			<?php endforeach; ?>
		</section>

		<?php include_once("includes/navSupporter.inc.php") ?>
		
	</div>
</body>
</html>