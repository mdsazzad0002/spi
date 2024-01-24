
<!-- Note: with additional notice_Dispaly.php
           load by ajax notice_Display.php
           Insert by ajax notice_insert.php
           delete by ajax delete_notice.php

 -->

  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../dashbord/"><i class="bi bi-house"></i> Home</a></li>
        <li class="breadcrumb-item active" style="background: none;" aria-current="page">Notice Board</li>
      </ol>
    </nav>
  </div>


<!-- =========================Begin Page Content======================== -->
<!-- Modal  insert-->
    <form id="notice_form" action="" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">+ Notice Board</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="text" name="user_type" value="<?=$user_type;?>" hidden>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                   <label class="input-group-text" for="form2Example1"><i class="bi bi-bell mr-2"></i>  Notice Name</label>
                  </div>
                  <input required placeholder="Type notice Title" type="text" id="form2Example1" class="form-control" name="name" />
                </div>


                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                   <label class="input-group-text" for="form2Example34"><i class="bi bi-file-earmark mr-2"></i> Notice file</label>
                  </div>
                  <div class="custom-file">
                     <input required type="file" id="form2Example34" class="form-control" name="file" />
                   
                  </div>
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                   <label class="input-group-text" for="form2Example132"><i class="bi bi-fonts mr-2"></i>  Notice Type</label>
                  </div>
                  <select required name="type" class="form-control" id="form2Example132">  
                      <option value="">----select------</option>
                      <option>General</option>
                      <option>Result</option>
                  </select>
                </div>
                <div class="status_insert">
                    
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">X</span>
                    <span class="text">Close</span>
                </button>
                <button  type="submit" name="submit" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="text text-white-50">
                        <i class="bi bi-upload"></i>
                    </span>
                    <span class="text">Save changes</span>
                </button>
              </div>
            </div>
          </div>
        </div>
    </form>
<!-- end model insert -->



<!-- modal update -->
 <button id="model_btn_update" hidden  data-toggle="modal" data-target="#exampleModal_update"> Update</button>
<form id="notice_form_update" action="" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-pencil-fill"></i> Notice Board</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body ">
                <div class="update_display">
                    
                </div>
                <div class="status_update">
                    
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">X</span>
                    <span class="text">Close</span>
                </button>
                <button  type="submit" name="submit" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="text text-white-50">
                        <i class="bi bi-upload"></i>
                    </span>
                    <span class="text">Save changes</span>
                </button>
              </div>
            </div>
          </div>
        </div>
    </form>
    <div class="display_data">
        <!-- load by ajax -->
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript">
    // load data notice_display
    function display_data(){
        $.ajax({
            type:'post',
            url:'notice_display.php',
            success:function(data) {
                $('.display_data').html(data);
               
            }

        })
    }
    display_data()


    // insert data then reload notice_display
    $('#notice_form').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url:'notice_insert.php',
            data: new FormData(this),
            processData: false,
            contentType: false,
            type: 'POST',
            success:function(data){
                display_data()
                $('.status_insert').html(data);
                $('#notice_form')[0].reset();
                setTimeout(function() {
                     $('.status_insert').html('');
                },2000)
            }
        })
    })

    // delete Data then hide this tr of table
    function del_notice(thi, id){
        $.ajax({
            type:'POST',
            url:'delete_notice.php',
            data:{
                'id':id,
            },
            success:function(data) {
                $(thi).parents('tr').hide();
            }
        })
    }


    // update_notice_btn from notice_display.php
    function update_notice_btn(thi,id){
        $.ajax({
            url:'update_display.php',
            data: {
                'id':id,
            },
            type: 'POST',
            success:function(data){
                $('.update_display').html(data);
                $('#model_btn_update').click();


            }
        })
    }


    // update notice_form_update
    $('#notice_form_update').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url:'update_notice.php',
            data: new FormData(this),
            processData: false,
            contentType: false,
            type: 'POST',
            success:function(data){

                display_data()
                $('.status_update').html(data);
                setTimeout(function() {
                     $('.status_update').html('');
                },2000)
            }
        })

    })
</script>



 