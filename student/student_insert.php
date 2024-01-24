<?php 
        require_once '../conection/index.php';
        if(isset($_POST['name'])){
            $name=$_POST['name'];
            $name=str_replace("'","\'",$name);

            $phone=$_POST['phone'];
            $phone=str_replace("'","\'",$phone);

            $session=$_POST['session'];
            $session=str_replace("'","\'",$session);

            $technology=$_POST['technology'];
            $technology=str_replace("'","\'",$technology);

            $shift=$_POST['shift'];
            $shift=str_replace("'","\'",$shift);

            $poin=$_POST['point'];
            $poin=str_replace("'","\'",$poin);

            $help=$_POST['help'];
             $help=str_replace("'","\'",$help);

            $description=$_POST['description'];
             $description=str_replace("'","\'",$description);

            $semister=$_POST['semister'];
             $semister=str_replace("'","\'",$semister);

            $roll=$_POST['roll'];
             $roll=str_replace("'","\'",$roll);

            $reg=$_POST['reg'];
             $reg=str_replace("'","\'",$reg);

            $insert_data=$con->query("INSERT INTO `information_student`(`name`, `phone`, `session`, `technology`, `shift`, `poin`, `reasion`, `description`, `semister`, `roll`, `registration`) VALUES ('$name','$phone','$session','$technology', '$shift', '$poin','$help','$description','$semister','$roll','$reg')");

            if($insert_data){
                echo "<span class='bg-success d-block p-3 text-light mb-3 rounded'> Success submit. we will contacts you.</span>";
            }else{
                echo " <span class='bg-danger d-block p-3 text-light mb-3 rounded'> Failed submit.</span>";
            }
        }else{
            echo "We are failed";
        }
                
                
        
     ?>