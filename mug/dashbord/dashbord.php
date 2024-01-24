  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../dashbord/"><i class="bi bi-house"></i> Home</a></li>
        <li class="breadcrumb-item active" style="background: none;" aria-current="page">Dashboard</li>
      </ol>
    </nav>
  </div>

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
                <!-- Begin Page Content -->
                <div class="">
                    <!-- Page Heading -->
                    <div class="row">

                    	<!-- box start total bannar -->
                    	<div class=" col-md-6 col-xl-4">
                    		<div class="card card-raised border-start border-warning border-4 ">
	                      <div class="card-header h3">
	                      	<?php echo $total_banner=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `notice`")); ?> items
	                      	<i class="bi bi-file-earmark float-right text-warning"></i>
	                      </div>  
	                       <div class="card-body text-dark">
	                      	Notice
	                      </div>  
	                        
	                    </div>
                    	</div>
	                    
	                   
	                    <!-- next box -->

	                    <!-- box start total bannar -->
                    	<div class=" col-md-6 col-xl-4">
                    		<div class="card card-raised border-start border-success border-4 ">
	                     <div class="card-header h3">
	                      	<?php echo $total_banner=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `teacher_info`")); ?> items
	                      	<i class="bi bi-people-fill float-right text-success"></i>
	                      </div>  
	                       <div class="card-body text-dark">
	                      	Teacher info
	                      </div>    
	                        
	                    </div>
                    	</div>
	                    
	                   
	                    <!-- next box -->

	                      <!-- box start total bannar -->
                    	<div class=" col-md-6 col-xl-4">
                    		<div class="card card-raised border-start border-primary border-4 ">
	                     <div class="card-header h3">
	                      	<?php echo $total_banner=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `photo_galary`")); ?> items
	                      	<i class="bi bi-images float-right text-primary"></i>
	                      </div>  
	                       <div class="card-body text-dark">
	                      	Photo Glary
	                      </div>    
	                        
	                    </div>
                    	</div>
	                    
	                   
	                    <!-- next box -->



	                      <!-- box start total bannar -->
                    	<div class=" col-md-6 col-xl-4">
                    		<div class="card card-raised border-start border-warning border-4 ">
	                     <div class="card-header h3">
	                      	<?php echo $total_banner=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `instraction`")); ?> items
	                      	<i class="bi bi-info-circle float-right text-warning"></i>
	                      </div>  
	                       <div class="card-body text-dark">
	                      	Instraction
	                      </div>  
	                        
	                    </div>
                    	</div>
	                    
	                   
	                    <!-- next box -->

	                   
	                      <!-- box start total bannar -->
                    	<div class=" col-md-6 col-xl-4">
                    		<div class="card card-raised border-start border-success border-4 ">
	                      <div class="card-header h3">
	                      	<?php echo $total_banner=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `important_link`")); ?> items
	                      	<i class="bi bi-info-circle float-right text-success"></i>

	                      </div>  
	                       <div class="card-body text-dark">
	                      	Important Link
	                      </div>  
	                        
	                    </div>
                    	</div>
	                    
	                   
	                    <!-- next box -->


	                     <!-- box start total bannar -->
                    	<div class=" col-md-6 col-xl-4">
                    		<div class="card card-raised border-start border-success border-4 ">
	                      <div class="card-header h3">
	                      	<?php echo $total_banner=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `information_student`")); ?> items
	                      	<i class="bi bi-info-circle float-right text-success"></i>

	                      </div>  
	                       <div class="card-body text-dark">
	                      	Application
	                      </div>  
	                        
	                    </div>
                    	</div>
	                    
	                   
	                    <!-- next box -->




	                     <!-- box start total bannar -->
                    	<div class=" col-md-6 col-xl-4">
                    		<div class="card card-raised border-start border-success border-4 ">
	                      <div class="card-header h3">
	                      	<?php echo $total_banner=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `session`")); ?> items
	                      	<i class="bi bi-info-circle float-right text-success"></i>

	                      </div>  
	                       <div class="card-body text-dark">
	                      	Session
	                      </div>  
	                        
	                    </div>
                    	</div>
	                    
	                   
	                    <!-- next box -->



	                     <!-- box start total bannar -->
                    	<div class=" col-md-6 col-xl-4">
                    		<div class="card card-raised border-start border-success border-4">
	                      <div class="card-header h3">
	                      	<?php echo $total_banner=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `technology`")); ?> items
	                      	<i class="bi bi-info-circle float-right text-success"></i>

	                      </div>  
	                       <div class="card-body text-dark">
	                      	Technology
	                      </div>  
	                        
	                    </div>
                    	</div>
	                    
	                   
	                    <!-- next box -->


	                     <!-- box start total bannar -->
                    	<div class=" col-md-6 col-xl-4">
                    		<div class="card card-raised border-start border-primary border-4 ">
	                      <div class="card-header h3">
	                      	<?php echo $total_banner=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `admin_user`")); ?> items
	                      	<i class="bi bi-person float-right text-primary"></i>
	                      </div>  
	                       <div class="card-body text-dark">
	                      	Admin
	                      </div>  
	                        
	                    </div>
                    	</div>
	                    
	                   
	                  
	                   </div>
	               </div>

                  

                <!-- /.container-fluid -->

>