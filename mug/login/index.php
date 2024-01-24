<?php require_once "../assets/custom/session.php"; ?>
<?php require_once "../../conection/index.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>SPI Admin page login page</title>
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
   
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
<script type="text/javascript">
    function redirectfull(){
         swal({title: "success",text: "Please wait just a moment!",icon: "success",button: "ok", timer: 3000,});
        setTimeout(function(){
            window.location.href='/mug/';
        },1500)
    }
    function redirect(){
        swal({title: "error",text: "Please wait for access!",icon: "error",button: "ok", timer: 1000,});
         swal({title: "success",text: "Please wait just a moment!",icon: "success",button: "ok", timer: 3000,});
        setTimeout(function(){
            window.location.href='/mug/';
        },2000)
    }
    function noredirect(){
        swal({title: "error",text: "Please wait for access!",icon: "error",button: "ok", timer: 3000,});
         
        setTimeout(function(){
           swal({title: "Oh",text: "Please try again!",icon: "warning",button: "ok", timer: 10000,});
        },4000)
    }
</script>
 <script src="/assets/vendor/sweetalert/sweetalert.js"></script>
    <?php 
        if (isset($_POST['submit'])) {
                $emailp=$_POST['emailp'];
                $emailp=str_replace("'","\'",$emailp);
                
                  $password=$_POST['password'];
                  $password=str_replace("'","\'",$password);

                 $password=md5($password);
                    $insert_user_admin=mysqli_query($con,"SELECT * FROM `admin_user` WHERE `email`='$emailp' AND `password`='$password'");
                    if (mysqli_num_rows($insert_user_admin)==0) {
                        echo '<script>
                        swal({title: "error",text: "User and password not match!",icon: "error",button: "ok", timer: 3000,});
                        </script>';
                    }else{
                        $row_user_admin=mysqli_fetch_assoc($insert_user_admin);
                        $cont=$row_user_admin['control'];
                        if ($cont=='full'){
                            $_SESSION['full']=$emailp;
                            $_SESSION['half']=$emailp;
                            $_SESSION['id']=$row_user_admin['id'];

                           echo '<script>redirectfull()</script>';
                        }else if($cont=='half'){
                            $_SESSION['half']=$emailp;
                            echo '<script>redirect()</script>';
                        }else{
                             echo '<script>noredirect()</script>';
                        }
                        
                    }
        }

     ?>
               




    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>Login Here</h3>
        <label for="username">Email</label>
        <input type="text" placeholder="Email " value="<?php if(isset($emailp)){echo $emailp;} ?>" name="emailp" id="username">

        <label for="password">Password</label>
        <input  type="password" name="password" placeholder="Password" id="password">

        <button type="submit" name="submit" value="Submit">Log In</button>
    </form>
</body>
</html>


