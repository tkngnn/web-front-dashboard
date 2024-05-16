<?php 
  $level = '../';
  include ($level."DB/db.php");

if(isset($_FILES['myfile']['name']) && $_FILES['myfile']['name'] !="")
{
  $hinhanhpath = basename($_FILES["myfile"]["name"]);
  $target_dir = "../upload_img/";
  $target_file = $target_dir . $hinhanhpath;
  move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
  var_dump($target_file);
}
var_dump($target_file);

  
  $id=$_REQUEST['ID'];
  $status=$_REQUEST['status'];
  $fullname=$_REQUEST['firstName'];
  $email=$_REQUEST['email'];
  $phone=$_REQUEST['phone'];
  $address=$_REQUEST['organization'];
  $user_name=$_REQUEST['user'];
  $pass=$_REQUEST['pass'];
  $user_avatar =$_FILES['myfile']['name'];
  $manager_id=$_REQUEST['manager_id'];
  $created=$_REQUEST['date'];
  $deleted = 1;
  var_dump($user_avatar);
  var_dump($created);
  var_dump($id);
  var_dump($status);
  var_dump($fullname);
  var_dump($email);
  var_dump($phone);
  var_dump($address);
  var_dump($user_name);
  var_dump($pass);
  var_dump($manager_id);
  
  // $SQL_str_user="INSERT INTO `user`(`ID`, `status`, `fullname`, `email`, `phone`, `address`, `user_name`, `pass`, `user_avatar`, `manager_id`, `created_at`, `deleted`) VALUES  ('".$id."', '".$status."', '".$fullname."', '".$email."', '".$phone."', '".$address."', '".$user_name."','".$pass."', '".$user_avatar."', '".$manager_id."','".$created."', '".$deleted."')";
  // var_dump($SQL_str_user);
  $SQL_str_user="INSERT INTO `user`(`ID`, `status`, `fullname`, `email`, `phone`, `address`, `user_name`, `pass`, `user_avatar`, `manager_id`, `created_at`, `deleted`) VALUES  (:id, :status, :fullname, :email, :phone, :address, :user_name,:pass, :user_avatar, :manager_id,:created, :deleted)";
  var_dump($SQL_str_user);

  $ketqua = $db->prepare($SQL_str_user);
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

  move_uploaded_file($_FILES["myfile"]["tmp_name"],
  $level."uploads/".$_FILES["myfile"]["name"]);
  $ketqua->execute();
  header('location:../../front-dashboard/pages/users.php');
  ?>