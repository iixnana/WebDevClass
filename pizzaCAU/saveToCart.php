<?php include('core/init.php'); ?>

<?php 
$db = new Database;
$query = "SELECT * FROM tempcart";
$db->query($query);
$temp = $db->resultset();
$totalPrice = 0;
$ingredients = '';
$options = '';
$size = 0;
$cartTitle = 'Unknown';
foreach($temp as $item) :
	if ($item->category == 1)
	{
		$title = $item->title;
		$amount = $item->amount;
		$ingredients = $ingredients.$title." x ".$amount.";";
	}
	else if ($item->category == 2)
	{
		if ($item->title == "Small")
		{
			$size = '1';
		}
		else if 
		($item->title == "Medium")
		{
			$size = '2';
		}
		else
		{
			$size = '3';
		}
	}
	else if ($item->category == 0)
	{
		$cartTitle = $item->title;
	}
	else {
		$title = $item->title;
		$options = $options.$title.";";
	}
	$totalPrice += $item->price;
endforeach;
if ($size != 0 && (($cartTitle == 'Custom' && $ingredients != '') || ($cartTitle != 'Custom')))
{
	$cart = new Database;
	$query = "INSERT INTO cart (title, size, options, ingredients, price) VALUES ('".$cartTitle."','".$size."','".$options."','".$ingredients."', '".$totalPrice."')";
	$cart->query($query);
	$cart->execute();
	echo 1;
}
echo 0;
?>