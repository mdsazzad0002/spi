
<?php 
    if (file_exists('../../conection/index.php')) {
        require_once ('../../conection/index.php');
    }else{
        echo '404 not found page';
    }
    if (isset($_POST['tb'])) {
        $tb=$_POST['tb'];
        $id=$_POST['id'];


        $r_out=mysqli_fetch_assoc($con->query("SELECT * FROM `$tb` WHERE `id`='$id'"));
       	$table_del=$r_out['name'];
       	if (mysqli_num_rows($con->query("SELECT * FROM `$table_del`"))==0) {
       		$drop_table=$con->query("DROP TABLE `$table_del`");
	       	if ($drop_table) {
	       		$success=$con->query("DELETE FROM `$tb` WHERE `id`= '$id'");
				if ($success) {
					echo "Delete";
				}else{
					echo "we are failed delete data";
				}
	       	}else{
	       		echo "We are failed drop table";
	       	}
       	}else{
       		echo "Sub catagory not empty";
       	}

    }
 ?>