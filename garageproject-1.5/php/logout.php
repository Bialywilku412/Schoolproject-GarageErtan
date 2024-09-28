<?php

session_start();

if(isset($_SESSION['myid'])) {
    unset($_SESSION['myid']);
}

if(isset($_SESSION['myname'])) {
    unset($_SESSION['myname']);
}

header("Location: login.php");