<?php
    session_start();

    include_once "classes/User.php";
    include_once "classes/Db.php";

    if (!empty($_POST)) {
        $user = new User();

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user->setFirstname($firstname);
            $user->setLastname($lastname);
            $user->setEmail($email);
            $user->setPassword($password);

            $user->register();
    }

?><html lang="en">
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
<div id="container">
<header>
    <a id="logo" href="#">logo</a>
</header>

<div id="containerRegister">
    <form action="" method="post">
        <input type="text" name="firstname" id="firstname" placeholder="Voornaam"><br>

        <input type="text" name="lastname" id="lastname" placeholder="Achternaam"><br>

        <input type="text" name="email" id="email" placeholder="Email"><br>

        <input type="password" name="password" id="password" placeholder="Wachtwoord"><br>
    
        <input type="kaartnummer" name="kaart" id="kaart" placeholder="Kaartnummer"><br>   
        <p id="info" class="my_popup_open">Waar vind ik mijn kaartnummer?</p>     
        <div id="my_popup">
            <img src="images/kaart.jpg" alt="betaalkaart">
            <button class="my_popup_close">Sluiten</button>
        </div>

        <button type="submit">Registreer</button>
    </form>
</div>

<hr id="bottomLineRegister">
</div>

<!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>

  <!-- Include jQuery Popup Overlay -->
  <script src="scripts/jquery.popupoverlay.js"></script>

  <script>
    $(document).ready(function() {

      // Initialize the plugin
      $('#my_popup').popup();

    });
  </script>
</body>
</html>