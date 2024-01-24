  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../dashbord/"><i class="bi bi-house"></i> Home</a></li>
        <li class="breadcrumb-item active" style="background: none;" aria-current="page">Photo Galary</li>
      </ol>
    </nav>
  </div>
    


                <!-- ========== photo glary insert dialog ============== -->
                <!-- ========== photo glary insert dialog ============== -->
                <form method="post" id="photo_from" enctype="multipart/form-data">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Catagory</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <input type="text" name="user_type" value="<?= $user_type;?>" hidden>

                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <label class="input-group-text" for="form2Example1"> <i class="bi bi-fonts mr-2"></i> Photo Title</label>
                              </div>
                                <input required placeholder="Photo title" type="text" id="form2Example1" class="form-control" name="name" />
                            </div>
                            
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <label class="input-group-text" for="form2Example112"> <i class="bi bi-fonts mr-2"></i> Photo Type</label>
                              </div>
                                <select required class="form-control" name="type" id="form2Example112">
                                    <option value="">-------Select Type------</option>
                                    <option>glary</option>
                                    <option>slider</option>
                                    <option value="side_banar">side banar</option>
                                    
                                </select>
                            </div>
                            
                              <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <label class="input-group-text" for="form2Example13"> <i class="bi bi-link-45deg mr-2"></i> Link</label>
                              </div>
                                <input required placeholder="Photo title" type="text" id="form2Example13" class="form-control" name="link" />
                            </div>
                              


                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <label class="input-group-text" for="form2Example3"><i class="bi bi-image mr-2"></i>Photo file</label>
                              </div>
                              <div class="custom-file">
                                 <input required type="file" id="form2Example3" class="form-control" name="file" />
                                
                              </div>
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
                <!-- ========== photo glary insert dialog ============== -->
                <!-- ========== photo glary insert dialog ============== -->


                <!-- ========== photo glary update dialog ============== -->
                <!-- ========== photo glary update dialog ============== -->
                  <a id="update_btn" hidden class="btn btn-primary float-right float-end" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal11111">Update</a>

                <form method="post" id="photo_from_update" enctype="multipart/form-data">
                    <div class="modal fade" id="exampleModal11111" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> <i class="bi bi-pencil-fill"></i> Catagory</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="update_display">
                                <!-- load by ajax -->
                            </div>

                            <div class="status_update">
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
                <!-- ========== photo glary update dialog ============== -->
                <!-- ========== photo glary update dialog ============== -->


                    <!-- DataTales Example -->
                    <div>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <h6 class=""> <span class="h2 "><i class="bi bi-images mr-2"></i>Photo Galary</span> 
                                 <a class="btn btn-primary float-right float-end btn-sm btn-icon-split" href="#" data-toggle="modal" data-target="#exampleModal">
                                     <span class="icon text-white-50">+</span>
                                     <span class="text">Add new</span>
                                 </a>
                            </h6>
                        </div>
                        <div class="card-body">
                           <div class="photo_display">
                               <!-- load by ajax -->
                           </div>
                        </div>
                    </div>
                        
                    
                    </div>




<script type="text/javascript">

    // display photo data
    // insert photo data
    // update photo datda by update photo
    // update data
    // delete data

    // display photo data
    function photo_display(){
        $.ajax({
            type:'POST',
            url:'photo_display.php',
            success:function (data) {
                $('.photo_display').html(data);
            }
        })
    }
    photo_display();



    // insert photo data
    $('#photo_from').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'photo_insert.php',
            processData:false,
            contentType:false,
            data:new FormData(this),
            success:function (data) {
                $('.status').html(data);
                $('#photo_from')[0].reset();
                photo_display();
                setTimeout(function() {
                     $('.status').html('');
                },2000)
            }
        })
    })


    // update prepare photo data
   function update_photo(thi,id){
        $.ajax({
            type:'POST',
            url:'update_display.php',
            data:{
                'id':id,
            },success:function(data) {
                $('.update_display').html(data);
                $('#update_btn').click();
            }
        })
    }

    // update photo
    $('#photo_from_update').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'update_photo.php',
            processData:false,
            contentType:false,
            data:new FormData(this),
            success:function (data) {
                $('.status_update').html(data);
                photo_display();
                 setTimeout(function() {
                     $('.status_update').html('');
                },2000)
            }
        })
    })


    // delete photo data
    function photo_delete(thi, id) {
        $.ajax({
            type:"POST",
            url:'delete_photo.php',
            data:{
                'id':id,
            },success:function(data) {
                 data = data.replace(/\s/g, '');
                 console.log(data)
                if (data=="Delete") {
                    $(thi).parents('tr').hide();
                }

            }
        })
    }
</script>