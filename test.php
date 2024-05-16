<?php 
        session_start();
        ob_start();
        if(isset($_SESSION['role']) && ($_SESSION['role']) == 1 )
        {
            include('layout.php');
        }
        else header('location: ../pages/authentication-signin.php');

  
?>