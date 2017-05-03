<?php
    include_once("classes/User.php");

    if(!empty($_POST)){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $avatar = $_POST['avatar'];

        $user = new User();
        $user->setFirstname($firstname);
        $user->setLastname($lastname);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setAvatar($avatar);

        $user->register();

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
<body>
    <form action="" method="post">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname">

        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <label for="fileToUpload">Avatar</label>
        <input type="file"  name="avatar" id="avatar">

        <button type="submit">Register</button>
    </form>
</body>
</html>