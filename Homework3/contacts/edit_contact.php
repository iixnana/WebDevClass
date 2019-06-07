<?php include('core/init.php'); ?>

<?php
//Create DB obj
$db = new Database;

//Run query
$db->query("UPDATE contacts SET
			first_name = :first_name,
			last_name = :last_name,
			email = :email,
			phone = :phone,
			contact_group = :contact_group
			WHERE id = :id");
									
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':contact_group', $_POST['contact_group']);
$db->bind(':id', $_POST['id']);

if($db->execute()){
	echo "Contact was added";
} else {
	echo "Contact not added";
}
?>