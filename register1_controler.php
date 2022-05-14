<?php

include "register1.php";
if (!empty($_GET['succ'])) {
    unset($_GET['succ']);
    echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0; URL=" . $_SERVER['PHP_SELF'] . "\" >";
}
