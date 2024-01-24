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
                            $describ=$_POST['describe'];
                            $describ=str_replace("'","\'",$describ);
                            $email=$_POST['email'];
                             $email=str_replace("'","\'",$email);
                            $phone=$_POST['phone'];
                            $catagory=$_POST['catagory'];
                             $catagory=str_replace("'","\'",$catagory);
                            $tech=$_POST['tech'];
                             $tech=str_replace("'","\'",$tech);
                            $file=$_FILES['file'];
                            $file_name=$file['name'];
                            $file_name=str_replace("'","\'",$file_name);
                            $file_tmp=$file['tmp_name'];
                            $file_rename=$randstring.$file_name;
                            $file_location='../../image/teacher/'.$file_rename;
                            $file_expend=explode('.', $file_name);
                            $image_extension=end($file_expend);
                            if($image_extension=='jpg' OR $image_extension=='png' OR $image_extension=='gif' OR $image_extension=='jpeg' OR $image_extension=='JPG' OR $image_extension=='PNG' OR $image_extension=='GIF' OR $image_extension=='JPEG' OR $image_extension= 'pdf' OR $image_extension= 'PDF'){
                                if (file_exists($file_rename)) {
                                    echo '<p class="text-white bg-danger p-2 rounded">Note: "Sorry, file already exists </p>';
                                      
                                }else{
                                      $success_insert=mysqli_query($con,"INSERT INTO `teacher_info`(`name`, `email`, `phone`, `catagory`, `tech`, `file`,`describ`,`user_type`) VALUES ('$name','$email','$phone','$catagory', '$tech', '$file_rename', '$describ','$user_type')");
                                     if($success_insert){
                                        move_uploaded_file($file_tmp, $file_location);
                                        echo '<p class="text-white bg-success p-2 rounded">Note: We are Success uploaded </p>';
                                     }else{
                                         echo '<p class="text-white bg-danger p-2 rounded">Note: "Sorry, Something Wrong please try again </p>';
                                     }
                                }
                                
                            }
                       
                           }
                                
                        
                     ?>