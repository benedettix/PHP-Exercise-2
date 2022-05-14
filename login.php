<?php
session_start();
include "connections.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $db->prepare("SELECT * FROM users WHERE email='$email' AND password='$password'");
    $query->execute();

    if($query->rowCount() === 1) {
        $user = $query->fetch(PDO::FETCH_OBJ);
        $_SESSION['id'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['last_name'] = $user->last_name;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;

        header("Location: index.php");
    }else{

        header("Location: index.php?error=1");
    }








