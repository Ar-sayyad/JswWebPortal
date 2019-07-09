<?php $dept_info = $this->jsw_model->select_data_info('dbo.UserTypes'); ?>
<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table form">                                                
                        <thead class="">
                        
                        <tr>
                            <th>
                                Page Name:<span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="text" class="form-control" required="" placeholder="Employee Name" id="emp_name">
                            </th>
                        </tr>
                         <tr>
                            <th>
                                Employee Code:<span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="text" class="form-control" required="" placeholder="Employee Code" id="emp_code">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Email:<span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="text" class="form-control" required="" autocomplete="off" placeholder="Email" id="email">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Password:<span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="password" class="form-control" required="" autocomplete="off" placeholder="Password" id="password">
                            </th>
                        </tr>
                        <tr>
                            <th>
                               Department:<span style="color:red;">*</span>
                            </th>
                            <th>
                                <select id="dept" name="dept" placeholder="dept" required="" class="clsmon form-control">
                                    <option value="" selected="" disabled="">---Select Department---</option>
                                        <?php $sr=1; foreach($dept_info as $dept){?>       
                                        
                                       <option data-id="<?php echo $dept['userType'];?>" value="<?php echo $dept['Department'];?>" <?php if($dept['userType']==1){ echo "disabled"; } ?>><?php echo $dept['Department'];?></option>                                      
                                        <?php  $sr++;}?>
                                    </select>
                            </th>
                        </tr>
                            <tr>
                                <th colspan="4" style="text-align:center">
                                    <button type="button" name="save" data-id="hello" id="saveUser" class="btn btn-success" value="save"><i class="material-icons">save</i> Save</button>
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
    $("#saveUser").click(function(){
      $("#saveUser").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
        $emp_name = $("#emp_name").val(); 
        $emp_code = $("#emp_code").val(); 
        $email = $("#email").val();
        $password = $("#password").val();
        $dept = $("#dept").val();
        $userType = $("#dept").find('option:selected').attr('data-id');
                   
      $.post('<?php echo base_url();?>Settings/saveUser', {emp_name:$emp_name,emp_code:$emp_code,email:$email,password:$password,
      dept:$dept,userType:$userType}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> User Added Successfully');
                                $(".success_msg").show();
                                window.location.reload();
                                setTimeout(hidetab,4000);
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#saveUser").html('<i class="material-icons">save</i> Save');
                          }
		});
      
    });
  
});
</script>