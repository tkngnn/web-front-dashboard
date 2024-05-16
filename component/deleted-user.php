
<?php 
  $level = '../';

  include ($level."DB/db.php");

    $id=$_REQUEST['ID'];
    $status="Disabled";
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
  $deleted = 0;
  $SQL_str_fixuser="update user
  set 
  `status`=:status, 
  `deleted`=:deleted
  where ID=:id";

  $ketqua = $db->prepare($SQL_str_fixuser);
  $ketqua->bindValue(':id', $id, PDO::PARAM_STR);
  $ketqua->bindValue(':status', $status, PDO::PARAM_STR);
  $ketqua->bindValue(':deleted',$deleted, PDO::PARAM_INT);

  var_dump($_FILES);
  move_uploaded_file($_FILES["myfile"]["tmp name"],
  $level."upload_img/".$_FILES["myfile"]["name"]);
  $ketqua->execute();
  header('location:../../front-dashboard/pages/users.php');
  ?>