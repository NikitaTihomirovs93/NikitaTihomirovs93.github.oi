<?php
session_start();
if (!$_SESSION['user']){
  header('Location: ../index.php');
}  
$host = 'localhost';
  $user = 'root';
  $pass = '';
  $db_name = 'sok-it';
  $link = mysqli_connect($host, $user, $pass, $db_name);
  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>sok-it</title>  
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse bg-gradient-warning" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Info
        </a> 
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/about.php">About us</a>
          <a class="dropdown-item" href="/gallery.php">Gallery</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/contact.php">Contacts</a>
        </div>
      </li>
    </ul>
      <a class="text-success mr-3 " alt="" aria-disabled="true"> <img src="<?= $_SESSION ['user']['avatar']?>" width="40" height="40" class="d-inline-block align-top" alt=""></a>
  <a class="text  mr-3"><?= $_SESSION ['user']['name']?></a>
    <a class="btn btn-outline-dark my-2 my-sm-1 mr-3 "  href="../logout.php" >Log Out</a>
  </div>
</nav>
<div class="parallax"><h1>Welcome to Jūrmala</h1>
  <p>Jūrmala is a city where you can regain peace, find inspiration and confess your love</p></div>
<div class="container">
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title` FROM `info`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title']}";
  }
?><span class="text-muted"> <br><?php
$sql = mysqli_query($link, 'SELECT `id`, `title1` FROM `info`');
while ($result = mysqli_fetch_array($sql)) {
  echo "{$result['title1']}";
}
?></span></h2>
        <p class="lead"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title3` FROM `info`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title3']}";
  }
?></p>
      </div>
      <div class="col-md-5">
      <img src="css/img/sunset.jpg" class="card-img-top" alt="...">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="5" height="5" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title></svg>
      </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title4` FROM `info`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title4']}";
  }
?><span class="text-muted"><br><?php
$sql = mysqli_query($link, 'SELECT `id`, `title5` FROM `info`');
while ($result = mysqli_fetch_array($sql)) {
  echo "{$result['title5']}";
}
?></span></h2>
        <p class="lead"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title6` FROM `info`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title6']}";
  }
?></p>
      </div>
      <div class="col-md-5">
      <img src="css/img/spa.jpg" class="card-img-top" alt="...">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="5" height="5" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title></svg>
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title7` FROM `info`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title7']}";
  }
?><span class="text-muted"><br><?php
$sql = mysqli_query($link, 'SELECT `id`, `title8` FROM `info`');
while ($result = mysqli_fetch_array($sql)) {
  echo "{$result['title8']}";
}
?></span></h2>
        <p class="lead"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title9` FROM `info`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title9']}";
  }
?></p>
      </div>
      <div class="col-md-5">
      <img src="css/img/party.jpg" class="card-img-top" alt="...">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="5" height="5" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title></svg>
      </div>
    </div>
    <hr class="featurette-divider">
  </div>
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2020-2021 Company, Inc.</p>
  </footer>
</main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>