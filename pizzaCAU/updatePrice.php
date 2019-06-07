<?php include('core/init.php'); ?>

<?php 
$db = new Database;
$query = "SELECT * FROM tempcart";
$db->query($query);
$db->execute();
$temp = $db->resultset();
$totalPrice = 0;
foreach($temp as $item) :
	$totalPrice += $item->price;
endforeach;
?>
<h2>Total Price</h2>
<h3 class="popPrice">$<?php echo $totalPrice?></h3>