<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table form">                                                
                        <thead class="">
                        
                        <tr>
                            <th>
                                Department Name:<span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="text" class="form-control" required="" placeholder="Department Name" id="dept_name">
                            </th>
                        </tr> 
                        <tr>
                            <th colspan="4" style="text-align:center">
                                <button type="button" name="save" data-id="hello" id="saveDept" class="btn btn-success" value="save"><i class="material-icons">save</i> Save</button>
                                 <button type="reset" name="Reset" class="btn btn-primary" value="reset"><i class="material-icons">replay</i> Reset</button>
                            </th>
                        </tr>

                        </thead>

                    </table>
                </form>
                </div>
            </div>
        </div>	
</div>
<script>
   $(document).ready(function(){ 
    $("#saveDept").click(function(){
      $("#saveDept").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
        $dept_name = $("#dept_name").val();      
                   
      $.post('<?php echo base_url();?>Settings/saveDept', {dept_name:$dept_name}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> Department Added Successfully');
                                $(".success_msg").show();
                                window.location.reload();
                                setTimeout(hidetab,4000);
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#saveDept").html('<i class="material-icons">save</i> Save');
                          }
		});
      
    });
  
});
</script>