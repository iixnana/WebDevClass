<?php include('core/init.php'); ?>

<?php
//Create DB obj
$db = new Database;

//Run query
$db->query("INSERT INTO contacts (first_name, last_name, email, phone, contact_group)
									VALUES (:first_name, :last_name, :email, :phone, :contact_group)");
									
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':contact_group', $_POST['contact_group']);

if($db->execute()){
	echo "Contact was added";
} else {
	echo "Contact not added";
}
?>