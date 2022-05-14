<?php
include "functions.php";
include "connections.php";

$email = $_POST['email'];
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = $db->prepare("INSERT INTO users (id, name, last_name, username, email, password) VALUES ('NULL', '$name', '$last_name', '$username', '$email', '$password')");
$query->execute();

if(!isset($email,$name,$last_name,$username,$password)) {
    header("Location: register1.php");
}

    header("Location: register1.php?succ=1");




