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
  <a class="navbar-brand" href="/">HOME</a>
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
<div class="container z-depth-1 my-3 p-1">

  <section>

    <h3 class="font-weight-bold text-center dark-grey-text pb-2"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title']}";
  }
?></h3>
    <hr class="w-header my-4">
    <p class="lead text-center text-muted pt-2 mb-5"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title2` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title2']}";
  }
?></p>

    <div class="row d-flex justify-content-center">

      <div class="col-md-6 col-xl-4">
        <h5 class="font-weight-normal"><a class="dark-grey-text"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title3` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title3']}";
  }
?></a></h5>
        
      </div>

      <div class="col-md-6">
        <p class="text-muted mb-5 pb-2"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title4` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title4']}";
  }
?></p>
      </div>


      <div class="col-md-6 col-xl-4">
        <h5 class="font-weight-normal"><a class="dark-grey-text" ><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title5` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title5']}";
  }
?></a></h5>
      </div>
      <div class="col-md-6">
        <p class="text-muted mb-5 pb-2"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title6` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title6']}";
  }
?></p>
      </div>


      <div class="col-md-6 col-xl-4">
        <h5 class="font-weight-normal"><a class="dark-grey-text" ><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title7` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title7']}";
  }
?></a></h5>
      </div>

      <div class="col-md-6">
        <p class="text-muted mb-5 pb-2"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title8` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title8']}";
  }
?></p>
      </div>

    </div>
   <hr>
  </section>

</div>

<div class="container  my-1 z-depth-1">
  <section class="p-md-1 mx-md-1 text-lg-left">
    <div class="row d-flex justify-content-center align-items-center">
      <h2 class="font-weight-bold mb-3"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title9` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title9']}";
  }
?></h2>
      <p class="text-muted text-center py-3">
      <?php
  $sql = mysqli_query($link, 'SELECT `id`, `title10` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title10']}";
  }
?>
      </p>
      <div class="view overlay rounded z-depth-2 mt-3 mb-5">
        <img
             src="css/img/jomas.jpg"
             class="img-fluid"
             alt="Sample project image"
             />
        <a href="#">
          <div class="mask rgba-white-slight"></div>
       </a>
    </div>
   </div>
</div>
<div class="container mt-5">
<section class="">

  <h3 class="text-center font-weight-bold mb-5"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title11` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title11']}";
  }
?></h3>

  <div class="row">
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
      <div class="card hoverable">
        <img class="card-img-top" src="css/img/winter.jpg" alt="Card image cap">
        <div class="card-body">
          <a class="black-text"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title12` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title12']}";
  }
?></a>
          <p class="card-title text-muted font-small mt-3 mb-2"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title13` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title13']}";
  }
?></p>

        </div>
      </div>
    </div>
 
    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
      <div class="card hoverable">
        <img class="card-img-top" src="css/img/kz.jpg" alt="Card image cap">
        <div class="card-body">
          <a  class="black-text"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title14` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title14']}";
  }
?></a>
          <p class="card-title text-muted font-small mt-3 mb-2"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title15` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title15']}";
  }
?></p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-0">
      <div class="card hoverable">
        <img class="card-img-top" src="css/img/brunch.jpg" alt="Card image cap">
        <div class="card-body">
          <a class="black-text"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title16` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title16']}";
  }
?></a>
          <p class="card-title text-muted font-small mt-3 mb-2"><?php
  $sql = mysqli_query($link, 'SELECT `id`, `title17` FROM `info2`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['title17']}";
  }
?> </p>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<hr>
  </section>
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