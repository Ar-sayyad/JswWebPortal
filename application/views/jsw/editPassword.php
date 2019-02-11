<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-content">
                 <form action="" method="POST" enctype="multipart/form-data">
                                        <table class="table form">                                                
                                            <thead class="">

<!--                                            <tr>
                                                <th>
                                                    Current Admin Password:<span style="color:red;">*</span>
                                                </th>
                                                <th>
                                                    <input type="password" class="form-control" required="" autocomplete="off"  placeholder="Current admin Password" id="curr_password">
                                                </th>
                                            </tr>-->
                                            <tr>
                                                <th>
                                                    New Password:<span style="color:red;">*</span>
                                                </th>
                                                <th>
                                                    <input type="password" class="form-control" required=""  autocomplete="off" placeholder="New Password" id="password">
                                                </th>
                                            </tr>

                                            <tr>
                                                <th>
                                                   Confirm Password:<span style="color:red;">*</span>
                                                </th>
                                                <th>
                                                    <input type="password" class="form-control"   autocomplete="off" placeholder="Confirm Password" id="confirm">
                                                   
                                                </th>
                                            </tr>
                                                <tr>
                                                    <th colspan="4" style="text-align:center">
                                                        <button type="button" name="save" data-id="hello" id="updateUser" class="btn btn-success" value="save"><i class="material-icons">save</i> Update Password</button>
                                                         <!--<button type="reset" name="Reset" class="btn btn-primary" value="reset"><i class="material-icons">replay</i> Reset</button>-->
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
    $("#updateUser").click(function(){
      $("#updateUser").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
       //  $curr_password = $("#curr_password").val(); 
        $password = $("#password").val();
        $confirm = $("#confirm").val();
                   
      $.post('<?php echo base_url();?>Settings/updatePassword/<?php echo $param2;?>', {password:$password,confirm:$confirm}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> Password Updated Successfully');
                                $(".success_msg").show();
                                window.location.reload(3000);
                                setTimeout(hidetab,4000);
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#updateUser").html('<i class="material-icons">save</i> Update Password');
                          }
		});
      
    });
  
});
</script>