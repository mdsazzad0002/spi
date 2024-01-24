<script type="text/javascript" src="/assets/vendor/jquery/jquery.min.js"></script>

<style type="text/css">
    .float-right{
        float: right;
    }
</style>
<!-- Begin Page Content -->
        <div class="row">
            <div class="col-md-9">
                           <!-- Page Heading -->
                    <div class="card">
                        <h1 class="card-header h5 text-center mb-4 text-gray-800">আপনি যদি এই প্রতিষ্ঠানের শিক্ষার্থী হয়ে থাকেন তবে উক্ত ফরম পূরনের মাধ্যমে অভিযোগ ও আবেদন করতে পারেন ধন্যবাদ।</h1>
                        <div class="card-body">
                            <form class="form" action="student_insert.php" id="form_data"  method="post" enctype="multipart/form-data">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-person"></i>
                                        </span>
                                         <input required type="text" placeholder="Name..... Like Example" required id="form2Example1" class="form-control" name="name" />
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-telephone"></i>
                                        </span>
                                        <input required type="number" placeholder="phone number.... Like 013*******" required id="form2Exaample1" class="form-control" name="phone" />
                                    </div>


                                 <div class="input-group mb-3">
                                  
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="bi bi-calendar-check"></i>
                                    </span>
                                     <input required class="form-control" placeholder="Enter your session like 19-20" name="session">
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">123</span>
                                          <input required type="text" class="form-control" name="roll" placeholder="Your roll example ***773">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-sign-stop-lights"></i>
                                        </span>
                                        <select required class="form-control" name="technology">
                                             <option value="">Choose you Technology Like...Computer</option>
                                           <?php $technology_select=mysqli_query($con, "SELECT * FROM `technology`");
                                            while($row_technology=mysqli_fetch_assoc($technology_select)){ ?>
                                                <option value="<?php echo $row_technology['technology']; ?>"><?php echo $row_technology['technology']; ?></option>
                                             <?php } ?>
                                        </select>
                                     </div>

                                       <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-vr"></i>
                                        </span>
                                         <select required class="form-control" name="shift"> 
                                            <option value="">Choose your Shift.....</option>
                                            <option value="1">1st Shift</option>
                                            <option value="2">2nd Shift</option>
                                        </select>
                                    </div>


                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-layout-text-sidebar-reverse"></i>
                                        </span>
                                         <select required class="form-control" name="semister"> 
                                            <option value="">Choose your semister....</option>
                                            <option value="1">1st</option>
                                            <option value="2">2nd</option>
                                            <option value="3">3rd</option>
                                            <option value="4">4th</option>
                                            <option value="5">5th</option>
                                            <option value="6">6th</option>
                                            <option value="7">7th</option>
                                            <option value="8">8th</option>
                                            <option value="None">Passed</option>
                                        </select>
                                    </div>
                                    

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            0.0
                                        </span>
                                        <input required type="text" class="form-control" name="point" placeholder="Your gpa or Cgpa last semister example 3.14">
                                    </div>
                                

                                      <div class="input-group mb-3"> 
                                        <span class="input-group-text" id="basic-addon1">456</span>
                                        <input required type="text" class="form-control" name="reg" placeholder="Your registration example *********455">
                                    </div>     
                                </div>
                              </div>
                              
                                  <!-- link input -->

                               <div class="input-group mb-3">
                                  
                                    <span class="input-group-text">Subject:</span>
                                 <textarea required class="form-control" cols="5" name="help" placeholder="Summary description"></textarea>
                                </div> 
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Description:</span>
                                    <textarea required class="form-control" name="description" placeholder="If you have problem please describe thank you."></textarea>
                                </div>
                                <div class="sub_alert">
                                    
                                </div>
                                <input class="btn btn-block btn-primary btn-sm float-end" type="submit" name="submit" value="Submit">
                            </form>
                        </div>
                        </div>
                               
            </div>

            <?php require_once '../assets/custom/sidebar.php'; ?>
            
        </div>
    <?php require_once '../assets/custom/back_to_top_&_messanger.php' ?>
                   


<script type="text/javascript">
    $('#form_data').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url:'student_insert.php',
            type:'POST',
            processData:false,
            contentType: false,
            data:new FormData(this),
            success:function(data){
                $('.sub_alert').html(data);
                $('#form_data')[0].reset();
            }
        })
    })
</script>