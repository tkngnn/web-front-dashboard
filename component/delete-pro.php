
<?php 
  $level = '../';
  include ($level."DB/db.php");
 
  $id=$_REQUEST['SKU'];
  $category=$_REQUEST['category'];
  $name=$_REQUEST['productName'];
  
  $status="Out of stock";
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
  $variants = 0;
  $created=$_REQUEST['date'];
  $deleted = 0;
    var_dump($status);
  
  $SQL_str_themsp="update product
  set 
  status=:status,
  variants=:variants, 
  deleted=:deleted
  where ID=:id";

  $ketqua = $db->prepare($SQL_str_themsp);
  $ketqua->bindValue(':id', $id, PDO::PARAM_STR);
  $ketqua->bindValue(':status', $status, PDO::PARAM_STR);
  $ketqua->bindValue(':variants', $variants, PDO::PARAM_INT);
  $ketqua->bindValue(':deleted',$deleted, PDO::PARAM_INT);


  var_dump($_FILES);
  move_uploaded_file($_FILES["myfile"]["tmp_name"],
  $level."upload_img/".$_FILES["myfile"]["name"]);
  $ketqua->execute();
  header('location:../../front-dashboard/pages/products.php');
  ?>