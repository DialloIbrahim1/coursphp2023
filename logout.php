<?php
session_start();
$_SESSION['connected'] = false;
unset($_SESSION['pseudo']);
header("Location: /coursphp3/index.php");
