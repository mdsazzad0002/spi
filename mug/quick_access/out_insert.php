<?php 
	if (file_exists('../../conection/index.php')) {
		require_once ('../../conection/index.php');
	}else{
		echo '404 not found page';
	}
	
	//echo $_SERVER['HTTP_HOST'];
	if (isset($_FILES['file'])) {
		function generateRandomString($length = 100) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

  

		$user_type=$_POST['user_type'];
		$out_cata=$_POST['catagory'];
		$catagory=$_POST['name'];
		$catagory=str_replace("'", "\'", $catagory);

		$file_name=$_FILES['file']['name'];
		$file_name=str_replace("'", "\'", $file_name);
		$file_name=generateRandomString().$file_name;
		$file_tmp=$_FILES['file']['tmp_name'];

		$uploaded=$con->query("INSERT INTO `$out_cata`(`name`, `file`,`user_type`) VALUES ('$catagory','$file_name','$user_type')");
		if ($uploaded) {
			$move=move_uploaded_file($file_tmp,'../../image/'.$file_name);
			if ($move) {
				echo '<p class="text-white bg-success p-2 rounded">Note: We are Success </p>';
			}
			
		}else{
			echo '<p class="text-white bg-danger p-2 rounded">Note: We are Failed </p>';
		}
		 
	}else{
		echo '<p class="text-white bg-danger p-2 rounded">Note: file Not found </p>';
	}


 ?>
		
