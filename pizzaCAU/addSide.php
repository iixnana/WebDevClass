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
$size = $dbItem->size;
$query = "INSERT INTO cart (title, size, options, ingredients, price) VALUES ('".$title."','".$size."','','', '".$price."')";
$db->query($query);
$db->execute();
?>