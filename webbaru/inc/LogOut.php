<?php
@session_start();
session_destroy();
header("location: /webbaru/login.php");
?>