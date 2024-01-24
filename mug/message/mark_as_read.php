<?php 
	require_once '../assets/custom/session.php';
	require_once '../../conection/index.php';
	if(isset($_POST['id'])){
		$id=$_POST['id'];
		$con->query("UPDATE `information_student` SET `status`='1', `user_type`='$user_type' WHERE `id`='$id'");
	}


 ?>