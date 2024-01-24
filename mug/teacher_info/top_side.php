<?php 
	require_once '../../conection/index.php';
	if (isset($_POST['id'])) {
		$id=$_POST['id'];
		$select_teacher=mysqli_fetch_assoc($con->query("SELECT * FROM `teacher_info` WHERE `id`='$id'"));
		$top_status=$select_teacher['top'];
		$top="";
		$alert="";
		if (empty($top_status)) {
			$top="add";
			$alert= "- remove sidebar";
		}else{
			$top="";
			$alert="+ add sidebar";
		}
		$suc=$con->query("UPDATE `teacher_info` SET `top`='$top' WHERE `id`='$id'");
		if ($suc) {
			echo $alert;
		}else{
			echo "Some thing worng";
		}
	}

 ?>