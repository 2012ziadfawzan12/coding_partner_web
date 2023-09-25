<?php

include("function.php");

 $obj = new contact();


  if(isset($_POST['submit'])){
    $msg = $obj->info($_POST);

  }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Partner | Class registration</title>
    <link rel="stylesheet" href="class_registration.css">
</head>
<body>
    <div class="container">
    <form action="" method="POST">

    <div class="info">
        <?php if(isset($msg)){echo $msg;}  ?> <br>

    <label for="name">Full name</label>
    <input type="text" id="name" name="name" required> <br>

    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" required> <br>

    <label for="phone">Phone</label>
    <input type="number" name="phone" id="phone" required> <br>

    <!-- <label for="message">Message</label>
    <textarea name="" id="" cols="30" rows="10" placeholder="Message" name="message" required></textarea> <br> -->

    </div>

    <input type="submit" name="submit" id="sub">

    </form>
    </div>
</body>
</html>