<?php
@session_start();
session_destroy();
header("location: /webbaru/inc/login.php");
?>