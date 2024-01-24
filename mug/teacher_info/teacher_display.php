    <?php 
        require_once '../../conection/index.php';
 ?>


    <link href="/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <div class="card">
        <div class="card-header text-left h3">
            <i class="bi bi-people"></i> Teacher Information
            <butoon class="btn btn-primary float-right btn-sm btn-icon-split" data-toggle="modal" data-target=".bd-example-modal-lg">
            <span class="icon text-white-50">+</span>
            <span class="text">Add new</span>
        </button>


        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Notice</th>
                            <th>Technology</th>
                            <th>Type</th>
                            <th>View</th>
                            <th>Sidebar</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Notice</th>
                            <th>Technology</th>
                            <th>Type</th>
                            <th>View</th>
                            <th>Sidebar</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                            
                        </tr>
                    </tfoot>
                    <tbody>
                <?php $row_si=0;
       
                    $select_slider=mysqli_query($con,"SELECT * FROM `teacher_info`");
                    while($row_slider=mysqli_fetch_assoc($select_slider)){
                    $row_si++;
                ?>
                        <tr>
                            <td><?= $row_si;?></td>

                            <td><?= $row_slider['name'];?></td>
                            <td><?= $row_slider['tech'];?></td>
                            <td><?= $row_slider['catagory'];?></td>
                            <td>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $row_si;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                           Details of <span class="text-success">`<?= $row_slider['name'];?>`</span>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Picture
                                                    </div>
                                                    <div class="card-body">
                                                        <img class="mx-auto img-fluid" style="" src="/image/teacher/<?= $row_slider['file'];?>">
                                                          <p class="text-center">Figure: <?= $row_slider['name'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 mb-2">
                                                <div class="card">
                                                    <div class="card-header">
                                                         Contacts information
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-striped table-hover">

                                                         <tbody>
                                                            <tr>
                                                                <td>Technolody</td>
                                                                <td>: <?= $row_slider['tech'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Type of Employee</td>
                                                                <td>: <?= $row_slider['catagory'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone Number</td>
                                                                <td>: <?= $row_slider['phone'];?></td>
                                                            </tr>  
                                                            <tr>
                                                                <td>Email Address</td>
                                                                <td>: <?= $row_slider['email'];?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uploader By</td>
                                                                <td>: <?= $row_slider['user_type'];?></td>
                                                            </tr>
                                                             <tr>
                                                                <td>Uploaded Date</td>
                                                                <td>: <?= $row_slider['date'];?></td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            
                                                    
                                                
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                         About Me:
                                                    </div>
                                                    <div class="card-body">
                                                        <?= $row_slider['describ'];?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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




                                <a class="btn btn-primary btn-sm btn-icon-split" data-toggle="modal" data-target="#exampleModal<?= $row_si;?>" href="javascript:void(0)">
                                  <span class="icon text-white-50"><i class="bi bi-eye-fill"></i> </span>
                                  <span class="text">View</span>
                                </a>
                            </td>
                            <td><button class="btn btn-primary btn-sm" onclick="top_side(this, '<?= $row_slider['id'];?>')"><?php if (empty($row_slider['top'])) {
                               echo("+ add sidebar");
                            }else{
                                echo "- remove sidebar";
                            } ?></button></td>
                            <td>
                                  <a onclick="update_display(this,'<?= $row_slider['id'];?>')" href="javascript:void(0)" class="float-right btn btn-sm btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                   <i class="bi bi-pencil-fill"></i>
                                </span>
                                <span class="text">Edit</span>
                                </a>

                            </td>
                            <td> 
                                <a onclick="del_teacher(this,'<?= $row_slider['id'];?>')" href="javascript:void(0)" class="float-right btn btn-sm btn-danger btn-icon-split btn-sm">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Delete</span>
                                </a>

                                
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
    
<!-- .container-fluid -->
<script src="/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="/assets/vendor/datatables/datatables-demo.js"></script>