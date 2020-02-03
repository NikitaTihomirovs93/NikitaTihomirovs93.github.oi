<?php
session_start();
if (!$_SESSION['user']){
  header('Location: ../index.php');
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

<div class="container my-1 py-1 z-depth-1">
 <section class="px-md-2 mx-md-2 text-center dark-grey-text">
   <h1 class="font-weight-bold ">Jūrmala tourism information centre:</h1><br>
   <p>Telephone: +371 67147900</p>
   <p>E-mail: info@jurmala.lv</p>
   <p>Opening hours: 10:00 - 15:00</p>
 </section>
</div>
<div class="container-fluid mt-3 mb-2">
  <section class="mb-3">
    <div id="full-width-map" class="z-depth-1-half map-container" style="height: 500px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82805.9130192274!2d23.60989716756583!3d56.94923204325202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eedd07e8a104d3%3A0x78537e586c6c16df!2z0K7RgNC80LDQu9Cw!5e0!3m2!1sru!2slv!4v1580678000597!5m2!1sru!2slv" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
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