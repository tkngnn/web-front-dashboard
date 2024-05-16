<?php 
$sql="select* from `category`";
$result = $db ->prepare($sql);
$result ->execute();
$dsloaisp = $result -> fetchAll();

$sql_parent="select* from `category`";
$result_parent = $db ->prepare($sql);
$result_parent ->execute();
$dsloaisp_parent = $result_parent -> fetchAll();

?>