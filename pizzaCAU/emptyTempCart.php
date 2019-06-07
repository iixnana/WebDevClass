<?php include('core/init.php'); ?>
<?php 
$db = new Database;
$query = "DELETE FROM tempcart";
$db->query($query);
$db->execute();
?>