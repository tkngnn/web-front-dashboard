
<?php 
  $level = '../';

  include ($level."DB/db.php");

    $hinhanhpath = basename($_FILES["myfile"]["name"]);
    $target_dir = "../upload_img/";
    $target_file = $target_dir . $hinhanhpath;
    move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
    var_dump($target_file);
    var_dump($_FILES["myfile"]["name"]);


  $id=$_REQUEST['SKU'];
  $category=$_REQUEST['category'];
  $name=$_REQUEST['productName'];
  
  $status=$_REQUEST['status'];
  $price=$_REQUEST['priceName'];
  $discount=$_REQUEST['discount'];

  $category_img =$_FILES["myfile"]["name"];
  if(isset($_FILES['myfile']['name']) && $_FILES['myfile']['name'] =="")
  {
    $category_img =$_REQUEST['anhdaidien'];
  }
    
  else $category_img =$_FILES['myfile']['name'];
 

  $vendor=$_REQUEST['vendor'];
  $description =$_REQUEST['description'];
  $variants=$_REQUEST['quantity'];
  $created=$_REQUEST['date'];
  $deleted = 1;
  
  $SQL_str_themsp="update product
  set 
  category_id =:category_id,
  name =:name, 
  status=:status,
  price=:price,
  discount =:discount, 
  thumbnail=:thumbnail, 
  vendor=:vendor, 
  description=:description, 
  variants=:variants, 
  created_at =:created, 
  deleted=:deleted
  where ID=:id";

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


  var_dump($_FILES);
  move_uploaded_file($_FILES["myfile"]["tmp_name"],
  $level."upload_img/".$_FILES["myfile"]["name"]);
  $ketqua->execute();
  header('location:../../front-dashboard/pages/products.php');
  ?>