<script src="/assets/vendor/jquery/jquery.min.js"></script>
<link href="/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?php

 

?>
<style>
body {font-family: Arial;}

.float-right{
    float: right;
}

</style>
	
	<div class="row">
		<div class="col-md-9">
			    <div class="card shadow mb-4 box_short">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold h3"><i class="bi bi-mortarboard-fill"></i> <span class="text-success">Result</span></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SI</th>
                                            <th>Result</th>
                                            <th>Download</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SI</th>
                                            <th>Result</th>
                                            <th>Download</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                         <?php $row_si=0;
                            
                            $select_slider=mysqli_query($con,"SELECT * FROM `notice` WHERE `type`='Result' ORDER BY `id` DESC");
                            while($row_slider=mysqli_fetch_assoc($select_slider)){
                           $row_si++;

                         ?>
                                        <tr>
                                            <td><?= $row_si;?></td>
                                            <td><a class="card-title m-2 p-2" href="/image/notice/<?= $row_slider['file']; ?>" download><?= $row_slider['name'];?></a> <span><?php echo $row_slider['date']; ?></span></td>
                                            <td><a download="" href="/image/notice/<?= $row_slider['file']; ?>" class="float-right btn btn-success p-2 btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">⇓ Download</span>
                                    </a></td>
                                           
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
		</div>
		<?php require_once '../assets/custom/sidebar.php'; ?>
	</div>

<?php require_once '../assets/custom/back_to_top_&_messanger.php' ?>





<script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="/assets/vendor/datatables/datatables-demo.js"></script>
