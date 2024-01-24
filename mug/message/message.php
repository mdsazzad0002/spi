<?php   
  if (!defined('main')) {
     echo "<script>window.location.href='../'</script>";
    exit();
   } ;
?>
  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../dashbord/"><i class="bi bi-house"></i> Home</a></li>
        <li class="breadcrumb-item active" style="background: none;" aria-current="page">Message</li>
      </ol>
    </nav>
  </div>

<!-- DataTales Example -->
<div class="card">
    <div class="card-header py-3 h3 text-center">
        <h6 class="m-0 font-weight-bold text-primary"> <span class="text-success h2">Message & Review box</span> 
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                     <tr>
                        <th>ID</th>
                        <th>Name</th>                                
                        <th>Subject</th>
                       
                        <th>Email</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>                                
                        <th>Subject</th>
                      
                        <th>Email</th>
                        <th>View</th>
                    </tr>
                </tfoot>
                <tbody>


         <?php  
            $row_si=0;
          	$student_info_select=mysqli_query($con,"SELECT * FROM `information_student` ORDER BY `id` DESC");
            while ($student_info_row=mysqli_fetch_assoc($student_info_select)) {
                if ($row_si==50) {
                    break;
                }
                $s=$student_info_row['status'];
		?>
                <tr style="background:<?php if ($s!=1) {
                    echo "#cfcfcf; color:black";
                } ?>">
                    <td><?php $row_si++; echo $row_si;?></td>
                    <td><?php echo $student_info_row['name']; ?></td>
                   
                   <td><?php echo $student_info_row['reasion']; ?></td>
                  
                   
                 
                    <td style="height: 30px; overflow:hidden;"><?php echo $student_info_row['phone']; ?></td>
                  <td>

                        



                        <!-- model show data below -->
						<a onclick="mark_as_read(this, <?php echo $student_info_row['id'];?>)" class="btn btn-primary btn-sm btn-icon-split" data-toggle='modal' data-target="#message_modal<?php echo $student_info_row['id'];?>">
                            <span class="icon text-white-50">
                                 <i class="bi bi-eye-fill"></i>
                            </span>
						    <span class="text">
                                Details                  
                            </span>
						</a>

						<!-- model for information -->




<!-- ================== information web ================== -->
<!-- ================== information web ================== -->
            <form enctype="multipart/form-data" id="info_form" method="post" action="">
                    <div class="modal fade" id="message_modal<?php echo $student_info_row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $student_info_row['name'];?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                                 
                                <p>তারিখ: <?php echo $student_info_row['date']; ?><br>
                              
                               <p>বিষয়ঃ <?php echo $student_info_row['reasion']; ?></p>

                               <p style="text-align: justify;">জনাব,<br>
                                <?php echo $student_info_row['description']; ?></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                                <span class="icon text-white-50">X</span>
                                <span class="text">Close</span>
                            </button>
                            <a type="submit" target="_blank" href="print_preview.php?id=<?php echo $student_info_row['id'];?>" class="btn btn-primary btn-sm btn-icon-split">
                                <span class="icon text-white-50"><i class="bi bi-printer-fill mr-2"></i></span>
                                <span class="text"> print</span>
                           </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>

<!-- ================== information web ================== -->
<!-- ================== information web ================== -->
						<!-- delete data -->
                        <a  href="javascript:void(0)" onclick="message_delete(this, '<?php echo $student_info_row['id'];?>')" class="btn btn-danger myBtn btn-sm btn-icon-split" >
                            <span class="icon text-white-50">
                                <i class="bi bi-trash"></i>
                            </span>
                            <span class="text">
                                Delete
                            </span>
                        </a>
                        <!-- The Modal -->

                        </td>
                       
                    </tr>
              <?php } ?>
              
                </tbody>
            </table>
        </div>
    </div>
</div>



<script type="text/javascript">
   function message_delete(thi,id){
        $.ajax({
            type:'POST',
            url:'message_delete.php',
            data:{
                'id':id,
            },
            success:function(data){
                $(this).html(data);
                 data = data.replace(/\s/g, '');
                
                if (data=="Delete") {
                    $(this).html(data);
                    $(thi).parents('tr').hide();
                }else{
                     console.log(data)
                }
            }
        })
   }
 
       
       function mark_as_read(thi, id) {
          $.ajax({
            url:'mark_as_read.php',
            type:'POST',
            data:{
                'id':id,
            },success:function(data){
                //$(thi).parents('tr').hide();
                $(thi).parents('tr').css('backgroundColor', 'unset');
            }
          })
       }
</script>
