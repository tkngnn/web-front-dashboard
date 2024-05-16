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
    
  
  $id=$_REQUEST['SKU'];
  $category=$_REQUEST['category'];
  var_dump($category);
  $name=$_REQUEST['productName'];
  
  $status=$_REQUEST['status'];
  var_dump($status);
  $price=$_REQUEST['priceName'];
  $discount=$_REQUEST['discount'];

  $category_img =$_FILES["myfile"]["name"];
  var_dump($category_img);
  if(isset($_FILES['myfile']['name']) && $_FILES['myfile']['name'] !="")
  {
    $category_img =$_FILES['myfile']['name'];
  }
    
  else $category_img ="Category/default.png";
 
  
  $vendor=$_REQUEST['vendor'];
  $description =$_REQUEST['description'];
  $variants=$_REQUEST['quantity'];
  $created=$_REQUEST['date'];
  $deleted = 1;

  $SQL_str_themsp="Insert into product(ID, category_id, name, status, price, discount, thumbnail, vendor, description, variants, created_at, deleted) values (:id, :category_id, :name, :status, :price, :discount, :thumbnail, :vendor, :description, :variants, :created, :deleted)";

  $ketqua = $db->prepare($SQL_str_themsp);
  $ketqua->bindValue(':id', $id, PDO::PARAM_STR);
  $ketqua->bindValue(':category_id',$category, PDO::PARAM_STR);
  $ketqua->bindValue(':name', $name, PDO::PARAM_STR);
  $ketqua->bindValue(':status', $status, PDO::PARAM_STR);
  $ketqua->bindValue(':price', $price, PDO::PARAM_INT);
  $ketqua->bindValue(':discount', $discount, PDO::PARAM_INT);
  $ketqua->bindValue(':thumbnail', $category_img, PDO::PARAM_STR);
  $ketqua->bindValue(':vendor', $vendor, PDO::PARAM_STR);
  $ketqua->bindValue(':description', $description, PDO::PARAM_LOB);
  $ketqua->bindValue(':variants', $variants, PDO::PARAM_INT);
  $ketqua->bindValue(':created', $created, PDO::PARAM_STR);
  $ketqua->bindValue(':deleted',$deleted, PDO::PARAM_INT);

  
  if(isset($_FILES['myfile']['name']) && $_FILES['myfile']['name'] !="")
  {
    move_uploaded_file($_FILES["myfile"]["tmp_name"],
  $level."uploads/".$_FILES["myfile"]["name"]);
  }
  
  $ketqua->execute();
  header('location:../../front-dashboard/pages/products.php');
  ?>