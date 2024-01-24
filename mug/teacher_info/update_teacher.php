<?php 
				require_once '../../conection/index.php';
                        if(isset($_POST['name'])){
                            $id=$_POST['id'];
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
                            
                            $success_update=$con->query("UPDATE `teacher_info` SET `name`='$name',`email`='$email',`phone`='$phone',`catagory`='$catagory',`tech`='$tech',`describ`='$describ' WHERE `id`='$id'");
                            if($success_update){
                                    echo '<p class="text-white bg-success p-2 rounded">Note: We are Success Update </p>';
                            }else{
                                echo '<p class="text-white bg-danger p-2 rounded">Note: "Sorry, Something Wrong please try again </p>';
                            }
                        }
                           
                        
                     ?>