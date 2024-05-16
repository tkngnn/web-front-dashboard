
<?php 
  $level = '../';

  include ($level."DB/db.php");

    // $hinhanhpath = basename($_FILES["myfile"]["name"]);
    // $target_dir = "../upload_img/";
    // $target_file = $target_dir . $hinhanhpath;
    // move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
    // var_dump($target_file);
    // var_dump($_FILES["myfile"]["name"]);


  
    $id=$_REQUEST['id'];
  $deleted = 0;
  $SQL_str_fixuser="update order_hd
  set 
  deleted=:deleted
  where ID=:id";

  $ketqua = $db->prepare($SQL_str_fixuser);
  $ketqua->bindValue(':id', $id, PDO::PARAM_STR);
  $ketqua->bindValue(':deleted',$deleted, PDO::PARAM_INT);

  // var_dump($_FILES);
  // move_uploaded_file($_FILES["myfile"]["tmp name"],
  // $level."upload_img/".$_FILES["myfile"]["name"]);
  $ketqua->execute();
  header('location:../../front-dashboard/pages/orders.php');
  ?>