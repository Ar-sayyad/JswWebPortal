<?php $data_info = $this->db->get_where('dbo.UserTypes', array('userType' => $param2))->result_array();
 foreach ($data_info as $row) {
      ?>
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
                                <input type="text" class="form-control" required="" value="<?php echo $row['Department'];?>" placeholder="Department Name" id="dept_name">
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align:center">
                                <button type="button" name="save" data-id="hello" id="updateDept" class="btn btn-success" value="save"><i class="material-icons">save</i> Update</button>
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
 <?php } ?>
<script>
   $(document).ready(function(){ 
    $("#updateDept").click(function(){
      $("#updateDept").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
         $dept_name = $("#dept_name").val();      
                   
      $.post('<?php echo base_url();?>Settings/updateDept/<?php echo $param2;?>', {dept_name:$dept_name}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> Department Updated Successfully');
                                $(".success_msg").show();
                                window.location.reload();
                                setTimeout(hidetab,4000);
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#updateDept").html('<i class="material-icons">save</i> Update');
                          }
		});
      
    });
  
});
</script>