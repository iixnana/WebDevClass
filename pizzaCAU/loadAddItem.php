<?php include('core/init.php'); ?>

<?php 
$db = new Database;
$query = "SELECT * FROM tempcart";
$db->query($query);
$temp = $db->resultset();
?>
<?php foreach($temp as $item) :
if ($item->category > 0) {?>
<div id="popItemListElement_<?php $item->title;?>_<?php echo $_POST['itemListID'];?>" class = "popItemListElement">
		<p class="popAddL"><?php echo $item->title;?></p>
		<p class="popAddR"><?php echo $item->amount;?> for $<?php echo $item->price;?>
		<a class="popUpAddedItemRemove" onclick="$('#popItemList<?php echo $_POST['itemListID'];?>').load('deleteAddItem.php', {title: '<?php echo $item->title;?>', itemListID: <?php echo $_POST['itemListID'];?>});">&#215;</a></p>
</div>
<?php } endforeach;?>
