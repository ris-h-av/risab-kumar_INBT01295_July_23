<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:index.php'); 
}

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $mssg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name= '$name' AND email='$email'
    AND number='$number' AND message='$mssg' ") or die('query failed');

if(mysqli_num_rows($select_message) > 0 ){
    $message[] = 'Message sent already!';
}else{
    mysqli_query($conn, "INSERT INTO `message`(user_id,name,email,number,message)
    VALUES('$user_id','$name','$email','$number','$mssg') ") or die('query failed');
    $message[] ='Message sent!';
}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>Contact us</h3>
        <p><a href="home.php">Home</a> / Contact</p>
    </div>

    <section class="contact">
        <form action="" method="post">
            <h3>Say something!</h3>
            <input type="name" name="name" required placeholder="enter your name" class="box">
            <input type="email" name="email" required placeholder="enter your email" class="box">
            <input type="number" name="number" required placeholder="enter your number" class="box">
            <textarea name="message" class="box" placeholder="enter your message" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="send" class="btn">
        </form>
    </section>


    <?php include 'footer.php'; ?>
    <script src="./js/script.js"></script>
</body>
</html>