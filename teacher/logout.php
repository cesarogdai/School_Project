<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['logged']);
unset($_SESSION['role']);
header("location:../index.html");
?>