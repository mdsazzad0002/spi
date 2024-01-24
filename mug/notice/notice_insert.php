   <?php 
        	require_once '../../conection/index.php';
            if(isset($_POST['name'])){
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $randstring = '';
                    for ($i = 0; $i < 15; $i++) {
                        $randstring .= $characters[rand(0, strlen($characters))];
                    }
                $user_type=$_POST['user_type'];
                $name=$_POST['name'];
                $name=str_replace("'","\'",$name);
                $file=$_FILES['file'];
                $file_name=$file['name'];
                $file_name=str_replace("'","\'",$file_name);
                $file_tmp=$file['tmp_name'];
                $type=$_POST['type'];
                $file_rename=$randstring.$file_name;
                $file_location='../../image/notice/'.$file_rename;
                $file_expend=explode('.', $file_name);
                $image_extension=end($file_expend);
                if($image_extension=='jpg' OR $image_extension=='png' OR $image_extension=='gif' OR $image_extension=='jpeg' OR $image_extension=='JPG' OR $image_extension=='PNG' OR $image_extension=='GIF' OR $image_extension=='JPEG' OR $image_extension= 'pdf' OR $image_extension= 'PDF'){
                    if (file_exists($file_rename)) {
                          echo "Sorry, file already exists.";
                          
                    }else{
                          $success_insert=mysqli_query($con,"INSERT INTO `notice`( `name`, `file`,`type`,`user_type`) VALUES ('$name','$file_rename','$type','$user_type')");
                         if($success_insert){
                            move_uploaded_file($file_tmp, $file_location);
                            echo '<p class=" bg-success p-3 rounded text-light">Insert Success</p>';
                         }else{
                            echo '<p class=" bg-danger p-3 rounded text-light">File Failed</p>';
                         }
                    }
                    
                }
           
               }else{
               		echo "Not find Submit Button";
                }
            
         ?>    
