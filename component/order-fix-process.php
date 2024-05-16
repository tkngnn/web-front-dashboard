
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
    $order_date=$_REQUEST['order_date'];
    $customer=$_REQUEST['customer'];
    $phone=$_REQUEST['phone'];
    $address=$_REQUEST['address'];
    $note=$_REQUEST['note'];
    $status=$_REQUEST['status'];
    $payment_method=$_REQUEST['payment_method'];
  $deleted = 1;
  $SQL_str_fixuser="update order_hd
  set 
  order_date =:order_date,
  customer=:customer,
  phone=:phone,
  address=:address,
  note=:note,
  status=:status,
  payment_method=:payment_method,
  deleted=:deleted
  where ID=:id";

  $ketqua = $db->prepare($SQL_str_fixuser);
  $ketqua->bindValue(':id', $id, PDO::PARAM_STR);
  $ketqua->bindValue(':order_date', $order_date, PDO::PARAM_STR);
  $ketqua->bindValue(':customer', $customer, PDO::PARAM_STR);
  $ketqua->bindValue(':phone', $phone, PDO::PARAM_STR);
  $ketqua->bindValue(':address', $address, PDO::PARAM_LOB);
  $ketqua->bindValue(':note', $note, PDO::PARAM_LOB);
  $ketqua->bindValue(':status', $status, PDO::PARAM_STR);
  $ketqua->bindValue(':payment_method', $payment_method, PDO::PARAM_STR);
  $ketqua->bindValue(':deleted',$deleted, PDO::PARAM_INT);

  // var_dump($_FILES);
  // move_uploaded_file($_FILES["myfile"]["tmp name"],
  // $level."upload_img/".$_FILES["myfile"]["name"]);
  $ketqua->execute();
  header('location:../../front-dashboard/pages/orders.php');
  ?>