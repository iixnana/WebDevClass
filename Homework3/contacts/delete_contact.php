<?php include('core/init.php'); ?>

<?php
//Create DB obj
$db = new Database;

//Run query
$db->query("DELETE FROM contacts WHERE id = :id");

$db->bind(':id', $_POST['id']);

if($db->execute()){
	echo "Contact was deleted";
} else {
	echo "Contact not deleted";
}
?>