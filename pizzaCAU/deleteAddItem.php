<?php include('core/init.php'); ?>

<?php
//Create DB obj
$tempCart = new Database;
$query = "SELECT * FROM tempcart WHERE title = '".$_POST['title']."'";
$tempCart->query($query);
$tempCart->execute();
echo $tempCart->rowCount();
if ($tempCart->rowCount() != 0)
{
	echo 'here';
	$dbItem = $tempCart->single();
	$amount = $dbItem->amount;
	if ($amount > 1)
	{
		$price = $dbItem->price / $amount;
		$amount -= 1;
		$price *= $amount;
		$query = "UPDATE tempcart SET amount = '".$amount."', price = '".$price."' WHERE title = '".$_POST['title']."'";
		$tempCart->query($query);
		$tempCart->execute();
	}
	else
	{
		$query = "DELETE FROM tempcart WHERE title = '".$_POST['title']."'";
		$tempCart->query($query);
		$tempCart->execute();
	}
}
?>
<script>
console.log('Deleted <?php echo $_POST['title'];?>');
$('#popItemList<?php echo $_POST['itemListID'];?>').load('loadAddItem.php', {itemListID:<?php echo $_POST['itemListID'];?>});
$('#totalPrice<?php echo $_POST['itemListID'];?>').load('updatePrice.php');
</script>