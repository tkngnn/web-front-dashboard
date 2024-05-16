<?php 
$level="../";
include $level."DB/db.php";
$idsp = $_REQUEST['id'];

$SQL_str_sp="select * from product where ID=:idsp";

$sp_detail = $db->prepare($SQL_str_sp);
$sp_detail ->bindValue(':idsp',$idsp,PDO::PARAM_STR);
$sp_detail->execute();
$sp_detail_row = $sp_detail->fetchAll();


$SQL_str_danhsachloaisp="select * from category where deleted =1 ";
$danhsachloaisp_detail = $db->prepare($SQL_str_danhsachloaisp);
$danhsachloaisp_detail->execute();
$danhsachloaisp_detail_row = $danhsachloaisp_detail->fetchAll();


?>