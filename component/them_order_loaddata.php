
<?php 
$sql="select* from order_hd";
$result = $db ->prepare($sql);
$result->execute();
$dsorder = $result -> fetchAll();

?>


