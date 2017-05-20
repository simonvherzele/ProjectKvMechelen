<?php
    include_once("classes/User.php");

    if(!empty($_POST)){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User();
        $user->setEmail($email);
        $user->setPassword($password);

        $user->canLogin();

        header('location :indexSupporter.php');
    }

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kv Mechelen</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="register">

<?php include_once("includes/headerRegister.inc.php") ?>

<div id="containerRegister">
    <form action="" method="post">
        <input type="text" name="email" id="email" placeholder="Email"><br>

        <input type="password" name="password" id="password" placeholder="Password"><br>

        <button type="submit">Login</button>
    </form>

    <p>Or sign up <a id="here" href="register.php">Here</a>!</p>

</div>

<hr id="bottomLine">

</body>
</html>