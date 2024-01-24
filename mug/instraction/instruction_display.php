                        <?php 
                        	require_once '../../conection/index.php';
                            $select_slider=mysqli_query($con,"SELECT * FROM `institution_vision` ORDER BY `id` DESC");
                            while($row_slider=mysqli_fetch_assoc($select_slider)){


                         ?>
                        <div class="card ins_root mt-2 ">
                            <h3 class="card-header h6">
                               
                                <span class="h3 text-left"><?php if ($row_slider['type']=='ins') {
                                    echo "Institution";
                                }else{ echo "Vision";} ?></span>


                <a class="btn btn-primary btn-sm btn-icon-split float-right ml-2" href="javascript:void(0)" data-toggle='modal' data-target='#user_expand<?= $row_slider['id']; ?>'><span class="icon text-white-50"><i class="bi bi-eye-fill"></i></span><span class="text">View</span> </a>
<!-- ================== information web short title ================== -->
<!-- ================== information web  short title ================== -->
        
                    <div class="modal fade" id="user_expand<?= $row_slider['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Information of Mission & vision</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-bordered table-striped table-hover">
                               
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


                


                                <a href="javascript:void(0)" onclick="delete_ins(this,<?= $row_slider['id'];?>)" class="float-right btn btn-danger btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </a></h3>
                                    <div class="card-body">
                                         <?= $row_slider['content'];?>
                                    </div>
                                   
                        </div>
                                    
                            
                        
                    <?php } ?>