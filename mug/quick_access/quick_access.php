  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../dashbord/"><i class="bi bi-house"></i> Home</a></li>
        <li class="breadcrumb-item active" style="background: none;" aria-current="page">Quick Access</li>
      </ol>
    </nav>
  </div>
    

    <!-- ========== Main Catagory Model insert box ======== -->
    <!-- ========== Main Catagory Model insert box ======== -->
    <!-- Modal -->
            <form method="post" id="catagory_form" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">+ Add New Catagory</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                    <input type="text" name="user_type" value="<?=$user_type;?>" hidden>

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-table mr-1"></i> Catagory Name</span>
                      </div>
                      <input type="text" name="cata_name" class="form-control" placeholder="Enter your Catagory" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-image mr-1"></i> Image</span>
                      </div>
                      <input type="file" name="cata_pic" class="form-control" placeholder="Enter catagory wise picture" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="status">
                            <!-- RESPONSE BY AJAX  -->
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                        <span class="icon text-white-50">X</span>
                        <span class="text">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary btn-sm btn-icon-split">
                        <span class="icon text-white-50"><i class="bi bi-upload"></i></span>
                        <span class="text">Save changes</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            </form>
<!-- end model -->
        <!-- =============== End Main catagory Insert box & Model=========== -->
        <!-- =============== End Main catagory Insert box & Model=========== -->



        <!-- ========== Main Catagory Update box & Bootstrap Model========= -->
        <!-- ========== Main Catagory Update box & Bootstrap Model========= -->
         <!-- Modal  update catagory-->
            <button id="update_btn" hidden data-toggle="modal" data-target="#exampleModal45646">Update btn</button>

            <form method="post" id="catagory_form_update" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModal45646" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-pencil-fill"></i>  Edit Catagory</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <input type="text" name="user_type" value="<?=$user_type;?>" hidden>
                    
                  <div class="content_update">
                    <!-- load by ajax -->
                  </div>

                    <div class="status_update">
                        <!-- load by ajax -->
                    </div>
                  </div>
                      <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                        <span class="icon text-white-50">X</span>
                        <span class="text">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary btn-sm btn-icon-split">
                        <span class="icon text-white-50"><i class="bi bi-pencil"></i></span>
                        <span class="text">Save changes</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            </form>
<!-- end model update catagory -->
        <!-- ============ End Main Catagory Update box & bootstrap Modal============ -->
        <!-- ============ End Main Catagory Update box & bootstrap Modal============ -->




      
    <!-- ============ Sub catagory Insert Daalog Box by bootstrap modal =========== -->
    <!-- ============ Sub catagory Insert Daalog Box by bootstrap modal =========== -->
    <form method="post" id="subcatagory_form" enctype="multipart/form-data">
         <!-- Modal -->
            
            <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel12" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">+ Sub Catagory</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                    <input type="text" name="user_type" value="<?=$user_type;?>" hidden>
                    
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-table mr-1"></i>Sub Catagory Name</span>
                      </div>
                      <input type="text" name="cata_name" class="form-control" placeholder="Enter your Catagory" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                      <!-- catagory input for idendify sub catagory -->
                    <input type="text" id="sub_catagory_input" value="" hidden name="catagory">

                    <div class="substatus">
                        
                    </div>



                  </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                            <span class="icon text-white-50">X</span>
                            <span class="text">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm btn-icon-split">
                            <span class="icon text-white-50"><i class="bi bi-upload"></i></span>
                            <span class="text">Save changes</span>
                        </button>
                  </div>
                </div>
              </div>
            </div>
            </form>
            <!-- end model -->
            <!-- ============ End Sub catagory Insert Daalog Box by bootstrap modal =========== -->
            <!-- ============ End Sub catagory Insert Daalog Box by bootstrap modal =========== -->
 


    <!-- =============== Final output modal box insert ============= -->
    <!-- =============== Final output modal box insert ============= -->

    <form method="post" id="outcatagory_form" enctype="multipart/form-data">
            
            <div class="modal fade" id="dataTable12312" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">+ Final Value File Upload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- form content -->
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="mr-1">T</i>Title</span>
                        </div>
                        <input type="text" class="form-control" name="name" placeholder="Content Title">
                      </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-image mr-1"></i> File Upload</span>
                      </div>
                      <input type="file" name="file" required class="form-control" placeholder="Enter your Catagory" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                      <!-- catagory input for idendify sub catagory -->
                    <input type="text" id="outcatagory_input" value="" hidden name="catagory">

                    <div class="outstatus">
                        
                    </div>



                  </div>
                       <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                                <span class="icon text-white-50">X</span>
                                <span class="text">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary btn-sm btn-icon-split">
                                <span class="icon text-white-50"><i class="bi bi-upload"></i></span>
                                <span class="text">Save changes</span>
                            </button>
                        </div>
                </div>
              </div>
            </div>
            </form>
            <!-- end model -->
            <!-- =============== Final output modal box insert ============= -->
            <!-- =============== Final output modal box insert ============= -->
    


   


 

     <!-- Begin Page Content -->
     <div class="row">
        <!-- ====== Main Catagory Content ======== -->
         <div class="col-md-6">
             <div class="card">
                <div  class="card-header">
                    Main Catagory
                    <a class="btn btn-primary float-right float-end btn-sm btn-icon-split" href="#" data-toggle="modal" data-target="#exampleModal">
                        <span class="icon text-white-50">+</span>
                        <span class="text">Add new</span>
                    </a>
                </div>
                 <div class="card-body">
                      <div class="content_main_catagory">
                        <!-- by ajax -->
                    </div>
                 </div>
             </div>
         </div>
        <!-- ====== End Main Catagory Content ======== -->

         <!-- ====== Sub Catagory Content ======== -->
         <div class="col-md-6">
             <div class="card">
                <div  class="card-header">
                    Sub Catagory
                    <a class="btn btn-primary btn-sm float-right float-end btn-icon-split" href="#" data-toggle="modal" data-target="#exampleModal12">
                        <span class="icon text-white-50">+</span>
                        <span class="text">Add new</span>
                    </a>
                </div>
                 <div class="card-body">
                      <div class="content_sub_catagory">
                        <!-- by ajax -->
                    </div>
                 </div>
             </div>
         </div>
        <!-- ====== End Sub Catagory Content ======== --> 

        <!-- ====== Sub Catagory Content ======== -->
         <div class="col-md-12">
             <div class="card">
                <div  class="card-header">
                   Final Output
                    <a class="btn btn-sm btn-primary float-right float-end btn-icon-split" href="#" data-toggle="modal" data-target="#dataTable12312">
                        <span class="icon text-white-50">+</span>
                        <span class="text">Add new</span>
                    </a>
                </div>
                 <div class="card-body">
                      <div class="content_final_catagory">
                        <!-- by ajax -->
                    </div>
                 </div>
             </div>
         </div>
        <!-- ====== End Sub Catagory Content ======== -->

     </div>



<script type="text/javascript">
    // Main Catagory Show
    // Main Catagory Insert
    // Main CAtagory Update Prepare
    // Main Catagory Update
    // Main Catagory Delete


    // CATAGORY Display by table from cata_display
    function cata_display(){
        $.ajax({
            url:'cata_display.php',
            type:'post',
            success: function(data){
                $('.content_main_catagory').html(data);
                
            }
        });
    }
    cata_display()



    // Main CAtagory Insert
    $('#catagory_form').on('submit', function (e) {
       e.preventDefault();

       $.ajax({
            url: 'cata_insert.php',
            data: new FormData(this),
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(data){
                $('.status').html(data);
                cata_display();
                setTimeout(function() {
                     $('.status').html('');
                },2000)
            }
        });
    });



     // Main CAtagory Update Prepre 
    function openUpdate(thi, id, catagory){
         $.ajax({
            url: 'update_display.php',
            data:{
                'id':id,
                'catagory':catagory,
            },
            type: 'POST',
            success: function(data){
               $('#update_btn').click();
               $('.content_update').html(data);
              

            }
        });
    }


    // Main Catagory Update
    $('#catagory_form_update').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: 'update_cata.php',
            data: new FormData(this),
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(data){
                $('.status_update').html(data);
                cata_display();
                // $('.content_final_catagory').html(' ')
                // $('.content_sub_catagory').html('');
                setTimeout(function() {
                     $('.status_update').html('');
                },2000)

            }
        });
    })


    // Main Catagory Delete
    function del_cata(thi,cata_name){
        $.ajax({
            type:'POST',
            url:'cata_del.php',
            data:{
                'main_catagory':cata_name,
            },
            success:function(data){
                console.log(data);
                data = data.replace(/\s/g, '');
                if (data=="Delete") {
                    $(thi).parents('tr').hide();
                }
            }
        })
    }



    // Sub catagory Show
    // Sub Catagory Insert
    // Sub catagory Update
    // Subcatagory Delete


    // subcatagory show
    function openSub(thi, id, catagory){
        $.ajax({
            url:'sub_display.php',
            type:'POST',
            data:{
                'sub_catagory':catagory,
            },
            success:function(data) {
                $('.content_sub_catagory').html(data);
                $('#sub_catagory_input').val(catagory);
                //$(thi).parents('tr').css('backgroundColor', '#64e79e');
            }
        })
    }


    // Sub catagory insert
        $('#subcatagory_form').on('submit', function (e) {
           e.preventDefault();

           $.ajax({
                url: 'sub_insert.php',
                data: new FormData(this),
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data){
                    $('.substatus').html(data);
                     openSub('','',$('#sub_catagory_input').val());
                     setTimeout(function() {
                        $('.substatus').html('');
                    },2000)

                }
            });
        });


       // sub delete
        function sub_delete(thi,id, tb){
            let tb_id=id;
            let tb_tb=tb;
            $.ajax({
                type:'POST',
                url:'sub_del.php',
                data:{
                    'tb':tb_tb,
                    'id':tb_id,
                },
                success:function(data){
                     data = data.replace(/\s/g, '');
                    if (data=="Delete") {
                        $(thi).parents('tr').hide();
                    }
                }
            })
        }

    
//open Final
//insert final
// delete final
// update final


// out final data display
function openFinal(thi,id,sub_catagory){
    $.ajax({
        type:'POST',
        url:'out_display.php',
        data:{
            'sub_catagory':sub_catagory,
        },
        success:function(data) {
            $('.content_final_catagory').html(data);
            $('#outcatagory_input').val(sub_catagory)
        }
    })
}

    // out data insert final
        $('#outcatagory_form').on('submit', function (e) {
           e.preventDefault();

           $.ajax({
                url: 'out_insert.php',
                data: new FormData(this),
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data){
                    $('.outstatus').html(data);
                     openFinal('', '',$('#outcatagory_input').val())
                     setTimeout(function() {
                        $('.outstatus').html('');
                    },2000)

                }
            });
        });


        //delete out final
        function out_delete(thi,id, tb){
            $.ajax({
                type:'POST',
                url:'out_del.php',
                data:{
                    'tb':tb,
                    'id':id,
                },
                success:function(data){
                   data = data.replace(/\s/g, '');
                    if (data=="Delete") {
                        $(thi).parents('tr').hide();
                    }
                   
                }
            })
        }
    </script>
<!-- /.container-fluid -->
