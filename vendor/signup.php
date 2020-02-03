<?php
session_start();
require_once 'connect.php';

    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if($password === $password_confirm){
        
        $path = 'uploads/' .time(). $_FILES['avatar']['name'];
       if(!move_uploaded_file($_FILES['avatar']['tmp_name'],'../' . $path)) {
        $_SESSION['msg'] = 'Photo do not match';
       header('Location: ..\register.php');
    }
    
    $password = md5($password);

    mysqli_query($connect,"INSERT INTO `sok-it` (`id`, `name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$name', '$login', '$email', '$password' , ' $path') ");
    
    $_SESSION['msg'] = 'registration completed';
    header('Location: ..\index.php');

    } else {
        $_SESSION['msg'] = 'Passwords do not match';
       header('Location: ..\register.php');
    }

    ?>
