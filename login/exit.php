<?php 
require_once("../classes/user.php");

session_start();
if(isset($_SESSION['username'])){
    session_destroy();
} else session_write_close();
header("Location: ./login.php");
?>
