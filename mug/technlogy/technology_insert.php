   <?php 

            require_once '../../conection/index.php';
                        if(isset($_POST['name'])){
                           $user_type=$_POST['user_type'];
                            $name=$_POST['name'];
                            $name=str_replace("'","\'",$name);
                            
                            $success_insert=mysqli_query($con,"INSERT INTO `technology`(`technology`,`user_type`) VALUES ('$name','$user_type')");
                                if($success_insert){
                                       echo "<p class='p-3 bg-success rounded text-light'>Success</p>";
                                     
                                }else{
                                	echo "<p class='p-3 bg-danger rounded text-light'>Failed</p>";
                                }
                                
                            }
                       
                           
                                
                        
                     ?>