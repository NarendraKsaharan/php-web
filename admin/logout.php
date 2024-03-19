<?php
session_start();

unset($_SESSION['isLoggedIn']);
unset($_SESSION['username']);

header("location: index.php");


?>