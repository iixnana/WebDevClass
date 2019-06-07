<?php include('core/init.php'); ?>

<?php 
//Create DB obj
$database = $_POST['dbTitle'];
$category = $_POST['category'];
$db = new Database;
$tempCart = new Database;
//Find in main database first
$id = $_POST['id'];
$query = "SELECT * FROM ".$database." WHERE id LIKE '".$id."'";
$db->query($query);
$dbItem = $db->single();
$title = $dbItem->title;
if ($category == 1 || $category == 3)
{
	//Look up if there is same in temp cart
	$query = "SELECT * FROM tempcart WHERE title LIKE '".$title."'";
	$tempCart->query($query);
	$tempCart->execute();
	//If there is one, act like this
	if ($tempCart->rowCount() == 0) //If its 1st or 3rd category, insert
	{
		$price = $dbItem->price;
		$amount = 1;
		$query = "INSERT INTO tempcart (title, amount, price, category) VALUES ('".$title."','".$amount."', '".$price."', '".$category."')";
		$tempCart->query($query);
		$tempCart->execute();
	}
	else if ($category == 1){ //Update amount only if it's 1st category
		$tempItem = $tempCart->single();
		$amount = $tempItem->amount + 1;
		if ($amount <= 3)
		{
			$price = $dbItem->price * $amount;
			$query = "UPDATE tempcart SET amount = '".$amount."', price = '".$price."' WHERE title = '".$title."'";
			$tempCart->query($query);
			$tempCart->execute();
		}
	}
}
else if ($category == 2)
{
	//Look up if there is same in temp cart
	$query = "SELECT * FROM tempcart WHERE category LIKE '".$category."'";
	$tempCart->query($query);
	$tempCart->execute();
	
	if($tempCart->rowCount() == 0)
	{
		$price = $dbItem->price;
		$amount = 1;
		$query = "INSERT INTO tempcart (title, amount, price, category) VALUES ('".$title."','".$amount."', '".$price."', '".$category."')";
		$tempCart->query($query);
		$tempCart->execute();
	}
	else{
		$price = $dbItem->price;
		$query = "UPDATE tempcart SET title = '".$title."', price = '".$price."' WHERE category = '2'";
		$tempCart->query($query);
		$tempCart->execute();
	}		
}
?>
<script>
$('#popItemList<?php echo $_POST['itemListID'];?>').load('loadAddItem.php', {itemListID: <?php echo $_POST['itemListID'];?>});
$('#totalPrice<?php echo $_POST['itemListID'];?>').load('updatePrice.php');
</script>