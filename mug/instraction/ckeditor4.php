    <?php 

	require_once '../../conection/index.php';

	if (isset($_POST['editor'])) {
		$content= $_POST['editor'];
		$content=str_replace("'","\'",$content);
		$type=$_POST['type'];
		$suc=$con->query("INSERT INTO `institution_vision`(`content`, `type`) VALUES ('$content','$type')");
		if($suc) {
			echo 'success';
		}else{
			echo "Please try again";
		}
	}

 ?>