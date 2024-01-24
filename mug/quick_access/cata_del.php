
<?php 
    if (file_exists('../../conection/index.php')) {
        require_once ('../../conection/index.php');
    }else{
        echo '404 not found page';
    }
    if (isset($_POST['main_catagory'])) {
       $tb='catagory';
       $name=$_POST['main_catagory'];
      

        $r_out=mysqli_fetch_assoc($con->query("SELECT * FROM `$tb` WHERE `name`='$name'"));
        $r_sub_count=$r_out['name'];
        if (mysqli_num_rows($con->query("SELECT * FROM `$r_sub_count`"))==0) {
           $dorp=$con->query("DROP TABLE `$r_sub_count`");
           if ($dorp) {
               if (file_exists('./image/'.$r_out['file'])) {
                    $un=unlink('./image/'.$r_out['file']);
                    if ($un) {
                        $success=$con->query("DELETE FROM `$tb` WHERE `name`= '$name'");
                        if ($success) {
                            echo "Delete";
                        }
                        
                    }

                }else{
                    $success=$con->query("DELETE FROM `$tb` WHERE `name`= '$name'");
                    if ($success) {
                        echo "Delete";
                    }
                }
           }else{
                echo "some thing worng";
           }
        }else{
            echo "sub Data not empty";
        }

    }
 ?>