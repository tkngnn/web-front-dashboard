
<?php 
  $level = '../';

  include ($level."DB/db.php");

    $hinhanhpath = basename($_FILES["myfile"]["name"]);
    $target_dir = "../upload_img/";
    $target_file = $target_dir . $hinhanhpath;
    move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
    var_dump($target_file);
    var_dump($_FILES["myfile"]["name"]);


  
    $id=$_REQUEST['ID'];
    $status=$_REQUEST['status'];
    $fullname=$_REQUEST['firstName'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $address=$_REQUEST['organization'];
    $user_name=$_REQUEST['user'];
    $pass=$_REQUEST['pass'];
  if(isset($_FILES['myfile']['name']) && $_FILES['myfile']['name']=="")
  $user_avatar =$_REQUEST['anhdaidien'];
  else 
  $user_avatar =$_FILES['myfile']['name'];
  $manager_id=$_REQUEST['manager_id'];
  $created=$_REQUEST['date'];
  $deleted = 1;
  $SQL_str_fixuser="update user
  set 
  `status`=:status, 
  `fullname`=:fullname, 
  `email`=:email, 
  `phone`=:phone, 
  `address`=:address, 
  `user_name`=:user_name, 
  `pass`=:pass, 
  `user_avatar`=:user_avatar, 
  `manager_id`=:manager_id, 
  `created_at`=:created,
  `deleted`=:deleted
  where ID=:id";

  $ketqua = $db->prepare($SQL_str_fixuser);
  $ketqua->bindValue(':id', $id, PDO::PARAM_STR);
  $ketqua->bindValue(':status', $status, PDO::PARAM_STR);
  $ketqua->bindValue(':fullname', $fullname, PDO::PARAM_STR);
  $ketqua->bindValue(':email', $email, PDO::PARAM_STR);
  $ketqua->bindValue(':phone', $phone, PDO::PARAM_STR);
  $ketqua->bindValue(':address', $address, PDO::PARAM_STR);
  $ketqua->bindValue(':user_name', $user_name, PDO::PARAM_STR);
  $ketqua->bindValue(':pass', $pass, PDO::PARAM_STR);
  $ketqua->bindValue(':user_avatar', $user_avatar, PDO::PARAM_STR);
  $ketqua->bindValue(':manager_id', $manager_id, PDO::PARAM_STR);
  $ketqua->bindValue(':created', $created, PDO::PARAM_STR);
  $ketqua->bindValue(':deleted',$deleted, PDO::PARAM_INT);

  var_dump($_FILES);
  move_uploaded_file($_FILES["myfile"]["tmp name"],
  $level."upload_img/".$_FILES["myfile"]["name"]);
  $ketqua->execute();
  header('location:../../front-dashboard/pages/users.php');
  ?>