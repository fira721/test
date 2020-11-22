<?php
session_start();
//hapus phpssid dari browser
if (isset($_COOKIE[session_name()]))
setcookie(session_name(), "", time()-3000, "/" );
//clear session from globals
$_SESSION=array();
//clear seasion from disk
session_destroy();
header("location: login.php");
?>`