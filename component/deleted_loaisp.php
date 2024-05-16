
<?php 
  $level = '../';

  include ($level."DB/db.php");
  
  $id=$_REQUEST['projectID'];
  $name=$_REQUEST['projectName'];
  $category_img =$_REQUEST['myfile'];
  $parent_id=$_REQUEST['Parent_id'];
  $deleted = 0;

  $SQL_str_themloaisp="update category
  set 
  deleted=:deleted
  where ID=:id";

  $ketqua = $db->prepare($SQL_str_themloaisp);
  $ketqua->bindValue(':id', $id, PDO::PARAM_STR);
  $ketqua->bindValue(':deleted', $deleted, PDO::PARAM_INT);


  move_uploaded_file($_FILES["myfile"]["tmp name"],
  $level."upload_img/".$_FILES["myfile"]["name"]);
  $ketqua->execute();
  header('location:../../front-dashboard/pages/type-pro.php');
  ?>