<?php

session_start();

if(!isset($_SESSION['id'])) {
    header("Location: index.php");
}


include "suc_login.view.php";
