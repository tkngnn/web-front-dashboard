<?php 
session_start();
ob_start();

include "../DB/db.php";
function checkadmin($email,$pass)
{   include "../DB/db.php";
    $sql_admin="SELECT * FROM `admin` WHERE `email` = '".$email."' AND `password` = '".$pass."'";
    $result_admin = $db ->prepare($sql_admin);
    $result_admin ->execute();
    $dsadmin = $result_admin -> fetchAll();
    if(count($dsadmin)>0) return $dsadmin[0]['role'];
    else return 0;
}

if((isset($_REQUEST['signin'])))
{
    $email = $_REQUEST['email'];
    $password =$_REQUEST['password'];
    $role=checkadmin($email,$password);
    $_SESSION['role']=$role;
    if($role == 1)
        header('location: ../index.php');
    else
    {
        
         header('location: ../pages/authentication-signin.php');
         $txt_error="Email hoac password khong ton tai";
    }
       
  
}


?>