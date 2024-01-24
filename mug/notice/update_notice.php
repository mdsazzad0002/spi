        <?php 
        	require_once '../../conection/index.php';
            if(isset($_POST['name'])){
               	$id=$_POST['id'];
                $name=$_POST['name'];
                $name=str_replace("'","\'",$name);
                $type=$_POST['type'];
              	$update=$con->query("UPDATE `notice` SET `name`='$name',`type`='$type' WHERE `id`='$id'");
              	if ($update) {
              		echo '<p class=" bg-success p-3 rounded text-light">Update Success</p>';
              	}else{
              		echo '<p class=" bg-danger p-3 rounded text-light">Update Success</p>';
              	}
           
             	  }else{
               		echo "Not find Submit Button";
                }
            
         ?>    

