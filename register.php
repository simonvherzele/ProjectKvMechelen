<?php
    include_once("classes/User.php");

    session_start();

    if (!empty($_POST)) {
        //if (!empty($_FILES["avatar"])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            //$avatar = $_POST['avatar'];

            $user = new User();
            $user->setFirstname($firstname);
            $user->setLastname($lastname);
            $user->setEmail($email);
            $user->setPassword($password);
            //$user->setAvatar($avatar);

            $user->register();

            $_SESSION['email'] = $email;
        //}
        header('Location: indexSupporter.php');
    }

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kv Mechelen</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="register">

<?php include_once("includes/headerRegister.inc.php") ?>

<div id="containerRegister">
    <form action="" method="post">
        <input type="text" name="firstname" id="firstname" placeholder="Firstname"><br>

        <input type="text" name="lastname" id="lastname" placeholder="Lastname"><br>

        <input type="text" name="email" id="email" placeholder="Email"><br>

        <input type="password" name="password" id="password" placeholder="Password"><br>

        <!--<input type="file"  name="avatar" id="avatar"><br>-->

        <button type="submit">Register</button>
    </form>
</div>

<hr id="bottomLineRegister">

</body>
</html>