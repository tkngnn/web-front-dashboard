<?php 
$sql="select* from product";
$result = $db ->prepare($sql);
$result ->execute();
$dssp = $result -> fetchAll();



$SQL_str_danhsachloaisp="select * from category ";
$danhsachloaisp= $db->prepare($SQL_str_danhsachloaisp);
$danhsachloaisp->execute();
$dsloaisp = $danhsachloaisp->fetchAll();

?>