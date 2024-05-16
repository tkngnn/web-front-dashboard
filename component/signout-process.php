<?php
include "../DB/db.php";
    if(isset($_SESSION['role']))
    {
        unset($_SESSION['role']);
        header('location: ../pages/authentication-signin.php');
    }
    
    

?>
