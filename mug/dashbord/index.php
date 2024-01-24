<?php
	if (file_exists('../assets/custom/session.php')) {
		 require_once '../assets/custom/session.php';
	}else{
		echo 'session not found';
	}
   

    define('main', 420);
    if (file_exists('../../conection/index.php')) {
        require_once '../../conection/index.php';
    }else{
    	echo 'conection page not found';
        exit();
    }
   

 ?>

<!DOCTYPE html>
<html lang="en">
   <head>
     <?php 
        
        
        // rank for meta tag
        if (file_exists('../assets/custom/meta.php')) {
            require_once '../assets/custom/meta.php';
        }
        
         // fav icon 
        if (file_exists('../assets/custom/fav.php')) {
            require_once '../assets/custom/fav.php';
        }
        

     ?>
    <title>Dashbord || 
        <?php
          // title
          if (file_exists('../assets/custom/title.php')) {
            require_once '../assets/custom/title.php';
          } 
        ?>
    </title>
   

    <!-- VENDOR CSS ICON -->
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/boxicons/css/boxicons.css">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="/assets/vendor/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
   	<style type="text/css">
		.border-4{
			border-width: 8px;
		}
		.border-start{
			border-bottom-width: 1px;
			border-right-width: 1px;
			border-top-width: 1px;
		}
		.card-raised{
			margin-bottom: 5px;
		}


	</style>

  </head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php 
            if (file_exists('../assets/custom/sidebar.php')) {
                require_once '../assets/custom/sidebar.php';
            }
         ?>
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               <?php 
               		// top bar
                    if (file_exists('../assets/custom/topbar.php')) {
                        require_once '../assets/custom/topbar.php';
                    }
                 ?>
                 <!-- Begin Page Content -->
					<div class="container-fluid">
						<?php 
							// dashbord bar
		                    if (file_exists('dashbord.php')) {
		                        require_once 'dashbord.php';
		                    }
						 ?>
				  	</div>
				<!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php 
                if (file_exists('../assets/custom/footer.php')) {
                    require_once '../assets/custom/footer.php';                }

             ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   <?php 
        if (file_exists('../assets/custom/back_to_top.php')) {
            require_once '../assets/custom/back_to_top.php';
        }
    ?>

    

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap4.6/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/vendor/sb-admin/js/sb-admin-2.min.js"></script>
</body>
</html>
