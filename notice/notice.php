<style type="text/css">
	.box_short{
		    box-shadow: 0px 0px 5px 4px gray;
	}
    .float-right{
        float: right;
    }
</style>

<script src="/assets/vendor/jquery/jquery.min.js"></script>
<link href="/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- DataTales Example -->
<div class="row">
	<!-- main content -->
	<div class="col-sm-12 col-md-9">
            <div class="card box_short mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Showing Result <span class="text-success">Notice Board</span></h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Notice</th>
                                    <th>Type</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Notice</th>
                                    <th>Type</th>
                                    
                                </tr>
                            </tfoot>
                            <tbody>
                                 <?php $row_si=0;
                    $select_slider=mysqli_query($con,"SELECT * FROM `notice`  ORDER BY `id` DESC");
                    while($row_slider=mysqli_fetch_assoc($select_slider)){
                        $row_si++;

                 ?>
                                <tr>
                                    <td><?= $row_si;?></td>
                                    <td><a class="card-title m-2" href="/image/notice/<?= $row_slider['file']; ?>" download> <i class="bi text-primary bi-arrow-right-circle-fill"></i> <?= $row_slider['name'];?></a> <span class="h6 float-right">(Date: <?php echo $row_slider['date']; ?>)</span></td>
                                    <td>
                                       <?php  
                                        $file_type=$row_slider['file'];
                                        $file_extension=explode('.',$file_type);
                                        $file_extension=end($file_extension);
                                        $f_e_upp=strtoupper($file_extension);
                                        if ($f_e_upp=='PDF') {
                                            echo "<img style='width:30px' src='/image/icon/pdf.png'>";
                                        }else{
                                            echo "<img style='width:80px'  src='/image/notice/".$file_type."'>";
                                        }
                                        ?>

                                </td>
                                   
                                </tr>
                                <?php } ?>
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
<!-- end all content display -->

<?php require_once '../assets/custom/back_to_top_&_messanger.php' ?>



<script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="/assets/vendor/datatables/datatables-demo.js"></script>
