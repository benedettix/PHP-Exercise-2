<?php
include "connections.php";
session_start();

if(isset($_SESSION['id'])) {
    header("Location: suc_login.php");
}

    include "login25.php";

