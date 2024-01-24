
<?php 
	if (file_exists('../../conection/index.php')) {
		require_once ('../../conection/index.php');
	}else{
		echo '404 not found page';
	}
	if (isset($_POST['sub_catagory'])) {
		$sub_cat=$_POST['sub_catagory'];
	
	?>

<!-- Vendor datatable css -->
    <link href="/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="dataTableSub_catagory" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>

			<?php

				$select_catagory=$con->query("SELECT * FROM `$sub_cat`");
				while($r_cata=$select_catagory->fetch_assoc()){
					?>
                    <tr>
                        <td><?= $r_cata['id']; ?></td>
                       
                        	<td> 
                             <a href="javascript:void(0)" onclick="openFinal(this,'<?= $r_cata['id']; ?>','<?= $r_cata['name']; ?>')">
                                <?= $r_cata['display']; ?>
                                	<span class="badge badge-primary"><?php
                                    $count_row_tb=$r_cata['name'];
                                echo mysqli_num_rows($con->query("SELECT * FROM `$count_row_tb`")); ?></span>
                            </a>
                     </td>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" onclick="openUpdate(this,'<?= $r_cata['id']; ?>','<?= $sub_cat;?>')">
                                <span class="icon text-white-50"><i class="bi bi-pencil-square"></i></span>
                                <span class="text">Edit</span>
                            </a>
                        </td>

                         <td>
                            <a class="btn btn-danger btn-sm btn-icon-split" href="javascript:void(0)" onclick="sub_delete(this,<?= $r_cata['id']; ?>, '<?= $sub_cat; ?>')">
                            <span class="icon text-white-50"><i class="bi bi-trash"></i></span> 
                            <span class="text">Delete</span>
                         </a>
                     </td>
                    </tr>

					<?php
				}




		 ?>
                </tbody>
            </table>
        </div>


 <!-- vendor datatable plagin -->
    <script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $('#dataTableSub_catagory').dataTable();
    </script>
<?php } ?>