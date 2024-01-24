              <div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../dashbord/"><i class="bi bi-house"></i> Home</a></li>
                    <li class="breadcrumb-item active" style="background: none;" aria-current="page">Mission & vision with info</li>
                  </ol>
                </nav>
              </div>
                    <!-- Page Heading -->
                   
                    <div class="card">
                        <div class="card-header h2">
                            Student for Instraction
                            <a class="btn btn-primary float-right btn-sm btn-icon-split ml-2" target="_blank" href="ckedit4index.php">
                              <span class="icon text-white-50"> +</span>
                              <span class="text">Add New</span>
                            </a>

                            <a class="btn btn-primary float-right btn-sm btn-icon-split" onclick="display_instruction()" href="javascript:void(0)">
                              <span class="icon text-white-50"> <i class="bi bi-arrow-counterclockwise"></i></span>
                              <span class="text">Reload</span>
                            </a>
                           
                            
                        </div>
                    </div>

                    <div class="display_instruction">
                        <!-- instruction display load by ajax -->
                    </div>
                <!-- /.container-fluid -->

<script type="text/javascript">
    function delete_ins(thi, id) {
        $.ajax({
            type:"POST",
            url:'delete_ins.php',
            data:{
                'id':id,
            },
            success:function(data){
                $(this).html(data);
                 data = data.replace(/\s/g, '');
                
                if (data=="Deleted") {
                    $(this).html(data);
                    $(thi).parents('.ins_root').hide();
                }else{
                     console.log(data)
                }
            }
        })
    }

    function display_instruction() {
        $.ajax({
            type:'POST',
            url:'instruction_display.php',
            success:function(data) {
                $('.display_instruction').html(data);
            }
        })
    }
    display_instruction();
    
</script>