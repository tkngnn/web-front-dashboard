<?php 
$level="../";
include $level."DB/db.php";
$idloaisp = $_REQUEST['id'];


$SQL_str_loaisp="select * from category where ID=:idloaisp";
$loaisp_detail = $db->prepare($SQL_str_loaisp);
$loaisp_detail ->bindValue(':idloaisp',$idloaisp,PDO::PARAM_STR);
$loaisp_detail->execute();
$loaisp_detail_row = $loaisp_detail->fetchAll();


$SQL_str_danhsachloaisp="select * from category where deleted =1 ";
$danhsachloaisp_detail = $db->prepare($SQL_str_danhsachloaisp);
$danhsachloaisp_detail->execute();
$danhsachloaisp_detail_row = $danhsachloaisp_detail->fetchAll();


?>