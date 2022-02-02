<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['T_LoggedIn']);
unset($_SESSION['C_LoggedIn']); 

?>
<meta http-equiv="refresh" content="0;index.php">

