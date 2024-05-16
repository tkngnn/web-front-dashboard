<?php 
$level="../";
include $level."DB/db.php";
$idorder = $_REQUEST['id'];
var_dump($idorder); 

$sql_admin="select* from order_hd";
$result_admin = $db ->prepare($sql_admin);
$result_admin ->execute();
$dsadmin = $result_admin -> fetchAll();


$SQL_str_order="SELECT `order_hd`.*, `order_detail`.*, `product`.`name` as product_name,`product`.`price` as product_price,`product`.`thumbnail` as product_img
FROM `order_hd` INNER JOIN `order_detail` ON `order_hd`.`ID`=`order_detail`.`order_id`
INNER JOIN `product` ON `order_detail`.`product_id`=`product`.`ID`
WHERE `order_hd`.`ID` LIKE :id";


$order_detail = $db->prepare($SQL_str_order);
$order_detail ->bindValue(':id',$idorder,PDO::PARAM_STR);
$order_detail->execute();
$order_detail_row = $order_detail->fetchAll();



?>