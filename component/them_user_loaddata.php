<?php 
$sql="select* from user";
$result = $db ->prepare($sql);
$result ->execute();
$dsuser = $result -> fetchAll();


$sql_admin="select* from admin";
$result_admin = $db ->prepare($sql_admin);
$result_admin ->execute();
$dsadmin = $result_admin -> fetchAll();


?>