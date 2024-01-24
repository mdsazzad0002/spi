
<?php 
	if (file_exists('../../conection/index.php')) {
		require_once ('../../conection/index.php');
	}else{
		echo '404 not found page';
	}
	
	//echo $_SERVER['HTTP_HOST'];
	if (isset($_POST['cata_name'])) {
		$user_type=$_POST['user_type'];
		$prev_cata=$_POST['catagory'];
		//echo "<script> var prev_cata=".$prev_cata."</script>";
		$catagory= $_POST['cata_name'];
		$catagoryDisplay=$catagory;
		$catagory=str_replace("'", "\'", $catagory);
		$catagory=str_replace(" ", "_", $catagory);
		$catagory=str_replace("-", "_", $catagory);

	$count_tb= mysqli_num_rows($con->query("SHOW TABLES LIKE '%$catagory%'"));
	if ($count_tb==0) {
		if(!empty($catagory) && mysqli_num_rows($con->query("SELECT * FROM `$prev_cata` WHERE `name`='$catagory'"))==0){

				$create_table=$con->query("CREATE TABLE IF NOT EXISTS $catagory(id int not null AUTO_INCREMENT, name varchar(1500), file varchar(150), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

				if ($create_table) {
					echo '<p class="text-white bg-success p-2 rounded">Note: We are Success create catagory \''.$catagoryDisplay.'\'</p>';

					$con->query("INSERT INTO `$prev_cata`(`name`, `display`,`user_type`) VALUES ('$catagory','$catagoryDisplay','$user_type')");

				}else{
					echo '<p class="text-white bg-warning p-2 rounded">Note: Please try again</p>';
				}
		}else{
					echo '<p class="text-white bg-danger p-2 rounded ">Note: Please Fill input box Or Already Exists</p>';
				}

	
	}else{
			echo '<p class="text-white bg-danger p-2 rounded ">Note: Already Exists</p>';
		}
}
	


 ?>

