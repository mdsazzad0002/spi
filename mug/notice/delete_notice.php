<?php 
	require_once('../../conection/index.php');
	if(isset($_POST['id'])){
		$id=$_POST['id'];
		
		$r_notice=mysqli_fetch_assoc($con->query("SELECT * FROM `notice` WHERE `id`= '$id'"));
		$file=$r_notice['file'];

		if(file_exists('../../image/notice/'.$file)){
			unlink('../../image/notice/'.$file);
		}
		$success_delete=mysqli_query($con,"DELETE FROM `notice` WHERE `id`='$id'");
		if($success_delete){
			echo "<script>window.location.href='../notice/'</script>";
		}
	}

 ?>