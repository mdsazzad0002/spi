   <?php 
    
	if (file_exists('../../conection/index.php')) {
		require_once ('../../conection/index.php');
	}else{
		echo '404 not found page';
	}
	
	//echo $_SERVER['HTTP_HOST'];
	if (isset($_POST['cata_name'])) {
		function generateRandomString($length = 100) {
		    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
		}
		$user_type=$_POST['user_type'];
		$catagory= $_POST['cata_name'];
		
		$catagory=str_replace("'", "\'", $catagory);
		$catagoryDisplay=$catagory;
		$catagory=str_replace(" ", "_", $catagory);
		$catagory=str_replace("-", "_", $catagory);

		$count_tb= mysqli_num_rows($con->query("SHOW TABLES LIKE '%$catagory%'"));
		
	if ($count_tb==0) {
		if(!empty($catagory) && mysqli_num_rows($con->query("SELECT * FROM `catagory` WHERE `name`='$catagory'"))==0){
				$create_table=$con->query("CREATE TABLE IF NOT EXISTS $catagory(id int not null AUTO_INCREMENT, name varchar(1500), display varchar(150), user_type varchar(1500), date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY key(id))");

				if ($create_table) {
					$cata_pic=$_FILES['cata_pic'];
					$cata_pic_name=generateRandomString().$cata_pic['name'];
					$cata_pic_name=str_replace("'","\'",$cata_pic_name);
					$cata_pic_tmp=$cata_pic['tmp_name'];
					echo '<p class="text-white bg-success p-2 rounded">Note: We are Success create catagory \''.$catagoryDisplay.'\'</p>';
					$con->query("INSERT INTO `catagory`(`name`, `display`, `file`,`user_type`) VALUES ('$catagory','$catagoryDisplay','$cata_pic_name','$user_type')");
					move_uploaded_file($cata_pic_tmp,'../../image/'.$cata_pic_name);
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
