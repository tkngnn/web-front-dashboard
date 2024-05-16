<?php 
$level="../";
include $level."DB/db.php";
$iduser = $_REQUEST['id'];

$SQL_str_user="select * from user where ID=:iduser";
$user_detail = $db->prepare($SQL_str_user);
$user_detail ->bindValue(':iduser',$iduser,PDO::PARAM_STR);
$user_detail->execute();
$user_detail_row = $user_detail->fetchAll();


$sql_admin="select* from admin";
$result_admin = $db ->prepare($sql_admin);
$result_admin ->execute();
$dsadmin = $result_admin -> fetchAll();


?>