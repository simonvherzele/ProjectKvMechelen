<?php
    include_once "classes/Db.php";
    include_once "classes/User.php";
    session_start();
    
    if(!empty($_POST)){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User();
        $user->setEmail($email);
        $user->setPassword($password);

        $user->login();

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
<div id="container">
<header>
    <a id="logo" href="#">logo</a>
</header>

<div id="containerRegister">
    <form action="" method="post">
        <input type="text" name="email" id="email" placeholder="Email"><br>

        <input type="password" name="password" id="password" placeholder="Wachtwoord"><br>

        <button type="submit">Login</button>
    </form>

    <p>Of registreer je <a id="here" href="register.php">Hier</a>!</p>

</div>

<hr id="bottomLineRegister">
</div>
</body>
</html>