<?php 
	require_once('../../conection/index.php');
	if(isset($_POST['id'])){
		$r_teacher=mysqli_fetch_assoc($con->query("SELECT * FROM `teacher_info` WHERE `id`='$id'"));

		$file=$r_teacher['file'];
		$id=$_POST['id'];

		if(file_exists('../../image/teacher/'.$file)){
			unlink('../../image/teacher/'.$file);
		}
		$success_delete=mysqli_query($con,"DELETE FROM `teacher_info` WHERE `id`='$id'");
		if($success_delete){
			echo "<script>window.location.href='../teacher_info/'</script>";
		}
	}

 ?>