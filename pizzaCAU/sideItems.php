<?php include('core/init.php'); ?>

<?php 
//Create DB obj
$db = new Database;
//Run Query
$db->query("SELECT * FROM sidemenu");
//Assign results set
$menusides = $db->resultset();
?>
<?php foreach($menusides as $menu) :?>
<div id="item<?php echo $menu->id;?>" class="item"
	onclick="$.ajax({method: 'post', data: {dbTitle: 'sidemenu', id: <?php echo $menu->id;?>}, url: 'addSide.php'});">
	<img class="itemImg" src="<?php echo $menu->image;?>">
	<h3 class="title"><?php echo $menu->title;?></h3>
	<p class="description"><?php echo $menu->description;?></p>
</div>
<?php endforeach; ?>