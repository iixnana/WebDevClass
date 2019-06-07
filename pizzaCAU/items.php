<?php include('core/init.php'); ?>

<?php 
//Create DB obj
$db = new Database;
//Run Query
$db->query("SELECT * FROM ingredients");
//Assign results set
$ingredients = $db->resultset();

$db->query("SELECT * FROM size");
$sizeList = $db->resultset();

$db->query("SELECT * FROM options");
$optionsList = $db->resultset();

$db->query("SELECT * FROM menupizza");
$menupizza	= $db->resultset();
?>
<?php foreach($menupizza as $menu) :?>
<div id="item<?php echo $menu->id;?>" class="item" data-reveal-id="addItem<?php echo $menu->id;?>"
	onclick="$.ajax({method: 'get', url: 'emptyTempCart.php'});
	$.ajax({method: 'post', data: {dbTitle: 'menupizza', id: <?php echo $menu->id;?>}, url: 'titleToTemp.php'});">
	<img class="itemImg" src="<?php echo $menu->image;?>">
	<h3 class="title"><?php echo $menu->title;?></h3>
	<p class="description"><?php echo $menu->description;?></p>
</div>


<div id="addItem<?php echo $menu->id;?>" data-cid="<?php echo $menu->id;?>" class="reveal-modal" data-reveal>
<div class="wrapper">
<div class = "popMain">
	<div id="popMainSection">
		<header class="popHeader">
		<?php if($menu->id == 0) {?>
		<h2>Ingredients</h2>
		</header>
		<?php foreach($ingredients as $ingredient) :?>
		<div id="popItem<?php echo $ingredient->id;?>" class="popItem" data-cid="<?php echo $ingredient->id;?>"
		onclick = "$('#popItemList<?php echo $menu->id;?>').load('addItem.php', {id: <?php echo $ingredient->id;?>, itemListID: <?php echo $menu->id;?>, dbTitle: 'ingredients', category: '1'});">
			<img class="popItemImg" src="<?php echo $ingredient->image;?>">
			<h2 class="popTitle"><?php echo $ingredient->title;?></h2>
		</div>
		<?php endforeach; ?>
		<?php } ?>
		<header class="popHeader">
		<h2>Size</h2>
		</header>
		<?php foreach($sizeList as $size) :?>
		<div id="popItem<?php echo $size->id;?>" class="popItem" data-cid="<?php echo $size->id;?>"
		onclick = "$('#popItemList<?php echo $menu->id;?>').load('addItem.php', {id: <?php echo $size->id;?>, itemListID: <?php echo $menu->id;?>, dbTitle: 'size', category: '2'});">
			<img class="popItemImg" src="<?php echo $size->image;?>">
			<h2 class="popTitle"><?php echo $size->title;?></h2>
		</div>
		<?php endforeach; ?>
		<header class="popHeader">
		<h2>Options</h2>
		</header>
		<?php foreach($optionsList as $option) :?>
		<div id="popItem<?php echo $option->id;?>" class="popItem" data-cid="<?php echo $option->id;?>"
		onclick = "$('#popItemList<?php echo $menu->id;?>').load('addItem.php', {id: <?php echo $option->id;?>, itemListID: <?php echo $menu->id;?>, dbTitle: 'options', category: '3'});">
			<img class="popItemImg" src="<?php echo $option->image;?>">
			<h2 class="popTitle"><?php echo $option->title;?></h2>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<div class = "popSide">
	<header class="popHeader">
		<h2 class="popHeaderText"> Added Items</h2>
	</header>
	<div id="popItemList<?php echo $menu->id;?>" class = "popItemList"><!--Added Items go here--></div>
	<div class = "popBottom">
		<div class = "popTotalPrice">
			<div id="totalPrice<?php echo $menu->id;?>">
			<h2>Total Price</h2>
			<h3 class="popPrice">$<?php echo $menu->price;?></h3></div>
		</div>
		<button class="popNext">OK</button>	
	</div>
</div>
</div>
<a class="close-reveal-modal">&#215;</a>
</div>
<?php endforeach; ?>

