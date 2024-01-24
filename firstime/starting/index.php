<!-- It is successfully worked local server -->

<?php 
	$host='localhost';
	$username='root';
	$password='';
	$con=new mysqli($host,$username,$password);
	if($con->connect_error){
		die("Connection failed: ". $con-> connect_error);
	}
	//$sql_crate_data="";
	if($con->query("CREATE DATABASE IF NOT EXISTS `spi`") === TRUE){
		echo 'Database create successfully';
		if (isset($_GET['type'])) {
			header('location:first_conection.php?type=chain');
		}else{
			echo "<script> window.location.href='first_conection.php'</script>";
		}
		
	}else{
		echo 'failed to create database'.$con->query("CREATE DATABASE IF NOT EXISTS `spi`");
	}

 ?>