<?php include('core/init.php'); ?>
<?php 
$db = new Database;
$query = "DELETE FROM cart";
$db->query($query);
$db->execute();
?>