<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `sok-it` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {
    
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" =>$user['id'],
        "name" =>$user['name'],
        "avatar" =>$user['avatar'],
        "email" =>$user['email'],
    ];

    header('Location: ../profile.php');

} else {
    $_SESSION['msg'] = 'Wrong username or password!';
    header('Location: ../index.php');
}

?>
