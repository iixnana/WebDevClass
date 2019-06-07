<?php include('core/init.php'); ?>

<?php 
$id = $_POST['id'];
$database = $_POST['dbTitle'];
$db = new Database;
$query = "SELECT * FROM ".$database." WHERE id LIKE '".$id."'";
$db->query($query);
$dbItem = $db->single();
$title = $dbItem->title;
$price = $dbItem->price;
$amount = 1;
$category = 0;
$query = "INSERT INTO tempcart (title, amount, price, category) VALUES ('".$title."','".$amount."', '".$price."', '".$category."')";
$db->query($query);
$db->execute();
?>