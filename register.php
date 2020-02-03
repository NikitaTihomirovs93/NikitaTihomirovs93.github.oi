<?php
session_start();
if (isset($_SESSION['user'])) {
  header('Location:  profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sok-it</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text" name="name" placeholder="Enter your name">
    <label>Login</label>
    <input type="text" name="login" placeholder="Enter your login">
    <label>E-mail</label>
    <input type="email" name="email" placeholder="Enter your e-mail">
    <label>Profile image</label>
    <input type="file" name="avatar">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter your password">
    <label>Repeat password</label>
    <input type="password" name="password_confirm" placeholder="Repeat your password">
    <button type="submit" >Enter</button>
    <p>
     Already have account? - <a href="/">Log In</a>
    </p>
  <?php
  if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])) {
      echo '<p class="msg"> '.$_SESSION['msg']  .' </p>';
  }
  unset($_SESSION['msg']);
  ?>
  </form>
</body>
</html>