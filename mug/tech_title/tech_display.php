<?php 
        require_once '../../conection/index.php';
 ?>

  <!-- Vendor datatable css -->
    <link href="/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- vendor datatable plagin -->
    <script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/vendor/sb-admin/js/demo/datatables-demo.js"></script>


<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0">
                <span class="">Teacher Type</span> 
                <button class="btn btn-primary float-right btn-sm btn-icon-split" data-toggle="modal" data-target="#exampleModal">
                    <span class="icon text-white-50">+</span>
                    <span class="text">Add New</span>
                </button>
            </h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Teacher Title</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Teacher Title</th>
                            <th>View</th>
                            <th>Delete</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                         <?php $row_si=0;
            $select_slider=mysqli_query($con,"SELECT * FROM `tech_title`  ORDER BY `id` DESC");
            while($row_slider=mysqli_fetch_assoc($select_slider)){
                $row_si++;

         ?>
                        <tr>
                            <td><?= $row_si;?></td>
                            <td><?= $row_slider['tech_title'];?></td>
                            <td><a class="btn btn-primary btn-sm btn-icon-split" href="javascript:void(0)" data-toggle='modal' data-target='#user_expand<?= $row_slider['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
<!-- ================== information web short title ================== -->
<!-- ================== information web  short title ================== -->
        
                    <div class="modal fade" id="user_expand<?= $row_slider['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information of Teacher Title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-striped table-hover">
                              
                               
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo $row_slider['tech_title']; ?></td>

                                </tr>
                               
                                
                               
                                
                               <tr>
                                    <td>Uploaded by</td>
                                    <td><?php echo $row_slider['user_type']; ?></td>

                               </tr>
                               <tr>
                                    <td>Uploaded Date</td>
                                    <td><?php echo $row_slider['date']; ?></td>

                               </tr>
                            </table>
                         
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                                <span class="icon text-white-50">X</span>
                                <span class="text">Close</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

<!-- ================== information web short title ================== -->
<!-- ================== information web short title ================== -->


                </td>

                            <td>
                            	<a onclick="del_tech_title(this,<?= $row_slider['id'];?>)" href="javascript:void(0)" class="btn btn-danger btn-icon-split btn-sm">

			                        <span class="icon text-white-50">
			                            <i class="fas fa-trash"></i>
			                        </span>
			                        <span class="text">Delete</span>
			                    </a>
                    <br></td>
                           
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->

