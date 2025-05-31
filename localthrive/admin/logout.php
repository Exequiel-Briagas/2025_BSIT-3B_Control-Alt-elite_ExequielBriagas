<?php 
require_once '../include/initialize.php';

// Start the session
@session_start();

// Unset all relevant session variables
unset($_SESSION['USERID']);  
unset($_SESSION['FULLNAME']); 
unset($_SESSION['USERNAME']);  
unset($_SESSION['ROLE']); 

unset($_SESSION['ADMIN_USERID']);  
unset($_SESSION['ADMIN_FULLNAME']); 
unset($_SESSION['ADMIN_USERNAME']);  
unset($_SESSION['ADMIN_ROLE']); 

// Destroy session (optional but safer)
session_destroy();

// Redirect to main login/index page
redirect(web_root . "index.php?logout=1");
?>
