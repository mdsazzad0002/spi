
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
        if (file_exists('./image/'.$r_out['file'])) {
        	$un=unlink('./image/'.$r_out['file']);
        	if ($un) {
        		$success=$con->query("DELETE FROM `$tb` WHERE `id`= '$id'");
        		if ($success) {
        			echo "Delete";
        		}
        		
        	}

        }else{
        	$success=$con->query("DELETE FROM `$tb` WHERE `id`= '$id'");
    		if ($success) {
    			echo "Delete";
    		}
        }



    }
 ?>