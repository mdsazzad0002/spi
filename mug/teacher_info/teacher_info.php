  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../dashbord/"><i class="bi bi-house"></i> Home</a></li>
        <li class="breadcrumb-item active" style="background: none;" aria-current="page">Teacher Info</li>
      </ol>
    </nav>
  </div>
                    
    <!-- Page Heading -->

<!-- ============== Teacher informtion insert modal================= -->
<!-- ============== Teacher informtion insert modal================= -->
<!-- Modal -->
<form id="teacher_form" enctype="multipart/form-data" action="">
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">+ Add new Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text"  name="user_type" value="<?=$user_type;?>" hidden>
         <!-- link input -->
              <div class="row">
                  <div class="col-md-6">
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <label class="input-group-text" for="form2Example1"><i class="bi bi-justify-left mr-2"></i> Name</label>
                          </div>
                           <input required placeholder="Type Teacher Name" type="text" id="form2Example1" class="form-control" name="name" />
                        </div>


                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <label class="input-group-text" class="form-label" for="form2Example2"><i class="bi bi-phone mr-2"></i>Mobile</label>
                          </div>
                           <input required type="text" placeholder="Type phone number" id="form2Example2" class="form-control" name="phone" />
                        </div>


                         <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <label class="input-group-text" class="form-label" for="form2Example3"><i class="bi bi-envelope mr-2"></i> Email</label>
                            
                          </div>
                          <input required placeholder="Type Email address" type="text" id="form2Example3" class="form-control" name="email" />
                        </div>
                  </div>
                  <div class="col-md-6">

                      
                      <div class="input-group">
                          <div class="input-group-prepend">
                            <label class="input-group-text" class="form-label" for="form2Example4"><i class="bi bi-justify-left mr-2"></i> Teacher Title</label>
                          </div>
                         <select required id="form2Example4" class="form-control" name="catagory">
                                <option value="">-----Select techer Title--------</option>
                                <?php  $select_slider=mysqli_query($con,"SELECT * FROM `tech_title`  ORDER BY `id` DESC");
                                    while($row_slider=mysqli_fetch_assoc($select_slider)){
                                      ?>
                                        <option value="<?= $row_slider['tech_title']; ?>"><?= $row_slider['tech_title']; ?></option>
                                    <?php } ?>
                            </select>
                        </div>
                        <a class="btn btn-sm btn-primary float-right  mb-3 btn-icon-split" href="/mug/tech_title/">
                            <span class="icon text-white-50">+</span>
                            <span class="text">Add Title</span>
                        </a>


                         
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <label class="input-group-text" class="form-label" for="form2Example5"><i class="bi bi-fonts mr-2"></i>Technology</label>
                          </div>
                         <select required  id="form2Example5" class="form-control" name="tech">
                            <option>----------Select Technology----------</option>
                            <?php
                                $select_technology=$con->query("SELECT * FROM `technology`");
                                while($row_tech=$select_technology->fetch_assoc()){

                            ?>
                            <option value="<?=$row_tech['technology']; ?>">
                                <?=$row_tech['technology']; ?>
                            </option>
                            <?php } ?>    
                        </select>
                        </div>
                        <a class="btn btn-sm btn-primary float-right  mb-3 btn-icon-split" href="/mug/technlogy/">
                            <span class="icon text-white-50">+</span>
                            <span class="text">Add Technology</span>
                        </a>
                       
  
                   <div class="input-group mb-3">
                      <div class="input-group-prepend">
                       <label class="input-group-text" class="form-label" for="form2Example322"><i class="bi bi-image mr-2"></i> photo</label>
                      </div>
                      <div class="custom-file">
                        <input required type="file" id="form2Example322" class="form-control" name="file" />
                      </div>
                    </div>

                  </div>
              </div>

               <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="form83"><i class="bi bi-info-circle mr-2"></i>About</label>
                </div>
                <textarea required id="form83" name="describe" placeholder="Describe about you" class="form-control" rows="6"></textarea>
            </div>
            <div class="status">
                
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
            <span class="icon text-white-50">X</span>
            <span class="text">Close</span>
        </button>
        <button type="submit" name="submit" class="btn btn-primary btn-sm btn-icon-split">
            <span class="icon text-white-50"><i class="bi bi-upload"></i></span>
            <span class="text">Save changes</span>
        </button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- ============== End Teacher informtion insert modal================= -->
<!-- ============== End Teacher informtion insert modal================= -->



<!-- ============== Teacher informtion Update modal================= -->
<!-- ============== Teacher informtion Update modal================= -->
<!-- Modal -->
 <button id="update_modal_btn"  hidden data-toggle="modal" data-target="#bd-example-modal-lg1">Update</button>

<form id="teacher_form_update" enctype="multipart/form-data" action="">
<div class="modal fade" id="bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-pencil-fill"></i> Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <!-- link input -->
             <div class="update_display">
                <!-- update status -->
            </div>
             <div class="status_update">
                <!-- update status -->
            </div>
      </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm btn-icon-split" data-dismiss="modal">
            <span class="icon text-white-50">X</span>
            <span class="text">Close</span>
        </button>
        <button type="submit" name="submit" class="btn btn-primary btn-sm btn-icon-split">
            <span class="icon text-white-50"><i class="bi bi-upload"></i></span>
            <span class="text">Save changes</span>
        </button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- ============== End Teacher informtion update modal================= -->
<!-- ============== End Teacher informtion update modal================= -->

<div class="teacher_display">
	<!-- load by ajax teacher_display -->
</div>


   <script type="text/javascript">
    // Teacher info Display
    // teacher info Insert
    // Teacher info Update 
    // Teacher inof Delete
    // This informmation adding side bar

    // load data taecher_display
    function teacher_display(){
        $.ajax({
            type:'post',
            url:'teacher_display.php',
            success:function(data) {
                $('.teacher_display').html(data);
               
            }

        })
    }
    teacher_display()


    // insert data then reload teacher_display
    $('#teacher_form').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url:'teacher_insert.php',
            data: new FormData(this),
            processData: false,
            contentType: false,
            type: 'POST',
            success:function(data){
                $('.status').html(data)
                teacher_display()
                setTimeout(function() {
                     $('.status').html('')
                },2000)
            }
        })
    })

    // teacher preapare

    function update_display(thi,id){
        $.ajax({
            type:'POST',
            url:'update_display.php',
            data:{
                'id':id,
            },
            success:function(data){
                $('#update_modal_btn').click();
                $('.update_display').html(data)
            }
        })
    }

    // teacher update
    $('#teacher_form_update').on('submit',function(e){
        e.preventDefault();
         $.ajax({
            url:'update_teacher.php',
            data: new FormData(this),
            processData: false,
            contentType: false,
            type: 'POST',
            success:function(data){
                $('.status_update').html(data)
                teacher_display()
                 setTimeout(function() {
                     $('.status_update').html('')
                },2000)
            }
        })
    })
    // delete Data then hide this tr of table
    function del_teacher(thi, id){
        $.ajax({
            type:'POST',
            url:'delete_info.php',
            data:{
                'id':id,
            },
            success:function(data) {
                $(thi).parents('tr').hide();
            }
        })
    }

    // addint top_side
    function top_side(thi,id){
        $.ajax({
            url:'top_side.php',
            type:'POST',
            data:{
                'id':id,
            },
            success:function(data){
                $(thi).html(data);
            }
        })
    }
</script>
