  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../dashbord/"><i class="bi bi-house"></i> Home</a></li>
        <li class="breadcrumb-item active" style="background: none;" aria-current="page">Important Link</li>
      </ol>
    </nav>
  </div>
                   
    <!-- =========== insert link ============ -->
    <!-- =========== insert link ============ -->

                <form method="post" id="link_from" enctype="multipart/form-data">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Link</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                         <!-- link input -->

                            <!-- who inserted data defined usertype -->
                            <input type="text" name="user_type" value="<?=$user_type;?>" hidden>
                              <div class="form-outline m-2">
                                <label class="form-label" for="form2Example1">Link title</label>
                                <input placeholder="Type link title" type="text" id="form2Example1" class="form-control" name="name" />
                                
                               </div>
                               <div class="form-outline m-2">
                                <label class="form-label" for="form2Example2">Link url</label>
                                <input type="text" placeholder="Type url" id="form2Example2"  class="form-control" name="description">
                                
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
                                <span class="text"> Save changes</span>
                           </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>

      
        <!-- ================ end insert link ========== -->
        <!-- ================ end insert link ========== -->


                    <div class="card">
                        <h1 class="card-header h3 text-gray-800 text-center">Important Link <!-- Page Heading -->
                            <a class="btn btn-primary float-right btn-sm btn-icon-split" data-toggle="modal" data-target="#exampleModal">
                                 <span class="icon text-white-50">+</span>
                                 <span class="text">Add New</span>
                            </a>
                        </h1>
                        <div class="card-body">
                            <div class="link_display">
                                <!-- load by ajax -->
                            </div>
                        </div>
                    </div>
                
         
            

    

<script type="text/javascript">
    // display link
    // insert link
    // delete link


    // link display
    function link_display() {
        $.ajax({
            type:'POST',
            url:'link_display.php',
            success:function(data) {
                $('.link_display').html(data);
            }
        })
    }
    link_display();


    // insert link
    $('#link_from').on('submit',function(e) {
        e.preventDefault();
         $.ajax({
            type:'POST',
            url:'insert_link.php',
            processData:false,
            contentType:false,
            data:new FormData(this),
            success:function (data) {
                $('.status').html(data);
                $('#link_from')[0].reset();
                link_display();
                setTimeout(function(){
                     $('.status').html('');
                },2000)
            }
        })
    })


    // delete link
    function delete_link(thi, id) {
        $.ajax({
            type:'POST',
            url:'delete_link.php',
            data:{
                'id':id,
            },
            success:function(data) {
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
</script>