
<!-- Note: with additional notice_Dispaly.php
           load by ajax notice_Display.php
           Insert by ajax notice_insert.php
           delete by ajax delete_notice.php

 -->

  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../dashbord/"><i class="bi bi-house"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="../teacher_info/"><i class="bi bi-people"></i> Teacher info</a></li>
        <li class="breadcrumb-item active" style="background: none;" aria-current="page">Teacher Title(পদবী)</li>
      </ol>
    </nav>
  </div>


<!-- Begin Page Content -->
<!-- Modal -->
    <form id="tech_form" action="" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">+ Teacher Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="text" name="user_type" value="<?=$user_type;?>" hidden>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                   <label class="input-group-text" for="form2Example1"><i class="bi bi-bell mr-2"></i>  Teacher Type</label>
                  </div>
                  <input placeholder="Type notice Title" type="text" id="form2Example1" class="form-control" name="name" />
                </div>


                <div class="tech_alert">
                	
                </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">X</span>
                    <span class="text">Close</span>
                </button>
                <button  type="submit" name="submit" class="btn btn-primary btn-sm btn-icon-split">
                    <span class="icon text-white-50"><i class="bi bi-upload"></i></span>
                    <span class="text">Save changes</span>
                </button>
              </div>
            </div>
          </div>
        </div>
    </form>
    <div class="display_data">

    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript">
    // load data notice_display
    function display_data(){
        $.ajax({
            type:'post',
            url:'tech_display.php',
            success:function(data) {
                $('.display_data').html(data);
               
            }

        })
    }
    display_data()


    // insert data then reload notice_display
    $('#tech_form').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url:'tech_insert.php',
            data: new FormData(this),
            processData: false,
            contentType: false,
            type: 'POST',
            success:function(data){
                $('.tech_alert').html(data);
                display_data()
                //$(this).clear();
                setTimeout(function(){
                    $('.tech_alert').html('');
                },1500)
            }
        })
    })

    // delete Data then hide this tr of table
    function del_tech_title(thi, id){
        $.ajax({
            type:'POST',
            url:'tech_delete.php',
            data:{
                'id':id,
            },
            success:function(data) {
            	$(thi).html(data);
            	setTimeout(function(){
            		  $(thi).parents('tr').hide();
            		},700)
              
            }
        })
    }
</script>



 