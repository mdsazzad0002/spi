<?php 
	require_once('../../conection/index.php');
	if ($_POST['id']) {
		$id=$_POST['id'];
		$catagory=$_POST['catagory'];
		$name=$_POST['cata_name'];
		$success=$con->query("UPDATE `$catagory` SET `display`='$name' WHERE `id`='$id'");
		if ($success) {
			echo '<p class="text-white bg-success p-2 rounded">Note: We are Success Update catagory \''.$name.'\'</p>';
		}else{
			echo '<p class="text-white bg-warning p-2 rounded">Note: Please try again</p>';
		}
	}

 ?>


