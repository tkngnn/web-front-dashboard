<?php 
  $level = '../';

  include ($level."DB/db.php");

    $hinhanhpath = basename($_FILES["myfile"]["name"]);
    $target_dir = "../upload_img/";
    $target_file = $target_dir . $hinhanhpath;
    move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);


  
  $id=$_REQUEST['projectID'];
  $name=$_REQUEST['projectName'];
  $category_img =$_FILES['myfile']['name'];
  $parent_id=$_REQUEST['Parent_id'];
  $deleted = 1;

  $SQL_str_themloaisp="Insert into category(ID, name, category_img, parent_id , deleted) values (:id, :name, :category_img, :parent_id, :deleted)";

  $ketqua = $db->prepare($SQL_str_themloaisp);
  $ketqua->bindValue(':id', $id, PDO::PARAM_STR);
  $ketqua->bindValue(':name', $name, PDO::PARAM_STR);
  $ketqua->bindValue(':category_img', $category_img, PDO::PARAM_STR);
  $ketqua->bindValue(':parent_id', $parent_id, PDO::PARAM_STR);
  $ketqua->bindValue(':deleted', $deleted, PDO::PARAM_INT);

  move_uploaded_file($_FILES["myfile"]["tmp_name"],
  $level."uploads/".$_FILES["myfile"]["name"]);
  $ketqua->execute();
  header('location:../../front-dashboard/pages/type-pro.php');
  ?>