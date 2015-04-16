<?php
@session_start();
unset($_SESSION['customer']);
header("Location: asus.php");
?>