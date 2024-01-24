<?php   
  if (!defined('main')) {
     echo "<script>window.location.href='../'</script>";
    exit();
   } ;
?>

<style type="text/css">
    .active{
        background: blue;

    }
    .input-group-text{
        width: 150px;
    }
    .wrapper{
        position: fixed;
        top: 0;
        left: 0;
    }
</style>

 <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #000000;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/mug/dashbord/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img class="rounded-circle" style="width: 40px; height: 40px;" src="/image/logo/<?=mysqli_fetch_assoc($con->query("SELECT * FROM `logo` WHERE `type` ='logo'"))['file']; ?>">
                </div>
                <div class="sidebar-brand-text mx-3"><?=mysqli_fetch_assoc($con->query("SELECT * FROM `web_title` WHERE `type` ='title'"))['title']; ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <?php 
                $dir_explode=explode("/", $_SERVER['PHP_SELF']); $active= $dir_explode[count($dir_explode)-2];

             ?>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if($active=='dashbord'){ echo 'active';}?>">
                <a class="nav-link " href="/mug/dashbord/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Important
            </div>

            <!-- notice -->
            <li class="nav-item <?php if($active=='notice'){ echo 'active';}?>">
                <a class="nav-link " href="/mug/notice/">
                    <i class="bi bi-bell-fill"></i>
                    <span>Notice Board</span></a>
            </li>
             <!-- notice -->
            <li class="nav-item <?php if($active=='quick_access'){ echo 'active';}?>">
                <a class="nav-link " href="/mug/quick_access/">
                    <i class="bi bi-bell-fill"></i>
                    <span>Quick Board</span></a>
            </li>
            
            
            <!-- Teacher -->
             <li class="nav-item <?php if($active=='teacher_info'){ echo 'active';}?>">
                <a class="nav-link " href="/mug/teacher_info/">
                    <i class="bi bi-people-fill"></i>
                    <span>Teacher Information</span></a>
            </li>
             <!-- photo glary -->
            <li class="nav-item <?php if($active=='photo_galary'){ echo 'active';}?>">
                <a class="nav-link " href="/mug/photo_galary/">
                    <i class="bi bi-images"></i>
                    <span>Photo Galary</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Interface
            </div>
            
            <!-- Instraction -->
            <li class="nav-item <?php if($active=='instraction'){ echo 'active';}?>">
                <a class="nav-link " href="/mug/instraction/">
                    <i class="bi bi-info-square"></i>
                    <span>Mission & vision</span></a>
            </li>
           

            <!-- Side important link -->
            <li class="nav-item <?php if($active=='important_link'){ echo 'active';}?>">
                <a class="nav-link " href="/mug/important_link/">
                   <i class="bi bi-star"></i>
                    <span>Important link</span></a>
            </li>
           
         

             <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Advance Interface
            </div>
            
            <li class="nav-item <?php if($active=='registration'){ echo 'active';}?>">
                <a class="nav-link " href="/mug/admin/">
                   <i class="bi bi-person-badge-fill"></i>
                    <span>Admin</span></a>
                    <ul>
                        
                    </ul>
            </li>
            <li class="nav-item <?php if($active=='setting'){ echo 'active';}?>">
                <a class="nav-link " href="../setting/">
                   <i class="bi bi-gear-fill"></i>
                    <span>Setting</span></a>
            </li>
             <li class="nav-item <?php if($active=='viewSite'){ echo 'active';}?>">
                <a class="nav-link " target="_blank" href="/">
                   <i class="bi bi-box-arrow-up-right"></i>
                    <span>Visit Site</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
          

           
        </ul>
        <!-- End of Sidebar -->