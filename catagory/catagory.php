<style type="text/css">
	.box_short{
		    box-shadow: 0px 0px 5px 4px gray;
	}
</style>
<?php 
	if (isset($_GET['catagory'])) {
		$catagory=$_GET['catagory'];

	?>
<!-- all content display -->
<div class="row">
	<!-- main content -->
	<div class="col-sm-12 col-md-9">
		<!-- Vendor datatable css -->
		<script src="/assets/vendor/jquery/jquery.min.js"></script>
		    <link href="/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
		    <div class="card box_short">
		    	<div class="card-header h3">
		    		Showing Result <?php echo $_GET['display']; ?>
		    	</div>
		    	<div class="card-body">
					<div class="table-responsive">
				            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
				                <thead>
				                    <tr>
				                         <th>SI</th>
				                        <th>Name</th>
				                        <th>Download</th>
				                    </tr>
				                </thead>
				                <tfoot>
				                    <tr>
				                        <th>SI</th>
				                        <th>Name</th>
				                        <th>Download</th>
				                       
				                    </tr>
				                </tfoot>
				                <tbody>

							<?php
							$select_catagory=$con->query("SELECT * FROM `$catagory`");
							$i=0;
							while($r_cata=$select_catagory->fetch_assoc()){
								$i++;
								?>
				                <tr>
				                    <td><?= $i; ?></td>
				                    <td><?= $r_cata['name']; ?></td>
				                    <td><a download="" href="/image/<?= $r_cata['file']; ?>"><i class="bi bi-download"></i></a></td>
				                  
				                    
				                </tr>

								<?php
							}

						 ?>
				                </tbody>
				            </table>
				        </div>
					</div>
				 </div>
				 

				</div>
				<!-- divide for sidebar -->
					<?php require_once '../assets/custom/sidebar.php'; ?>
				<!-- end divide ing sidebar -->
			</div>


		 <!-- vendor datatable plagin -->
		    <script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
		    <script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
		    <script src="/assets/vendor/sb-admin/js/demo/datatables-demo.js"></script>
		<?php }else{
				echo "<h1 class='text-center text-danger display-3'>404</h1>";
			} ?>