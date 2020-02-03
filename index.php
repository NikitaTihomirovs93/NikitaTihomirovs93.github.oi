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
  <form action="vendor/signin.php" method="post">
    <label>Login</label>
    <input type="text" name="login" placeholder="Enter Login">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter Password">
    <button type="submit">Enter</button>
    <p>
      Need new account? - <a href="register.php">Registration</a>
    </p>
    <?php
 if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])) {
      echo '<p class="msg"> '. $_SESSION['msg']  .' </p>';
  }
  unset($_SESSION['msg']);
  ?>
  </form>
</body>
</html>