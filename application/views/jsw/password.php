<!DOCTYPE html>
<html lang="en">
<?php include 'includes/header.php';?> 
    
    <body class="">
        <div class="wrapper ">
      <!-- Sidebar -->
      <?php //include 'includes/sidebar.php';?>       

    <!-- End Sidebar -->  

<div class="main-panel">
    <!-- Navbar -->
      <?php include 'includes/navbar.php';?>       

        <?php include 'includes/modal.php';?>
    
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 sideTwo">       
                    <div class="sidebar-wrapper ps-scrollbar-y-rail sideMn" style="">
                        
                        <?php include 'includes/userSidebar.php';?>
                    </div>
                </div>                      
                <div class="col-lg-10 col-md-10 col-sm-10" id="MainView">
<!--                          <div class="addbtn" style="margin-top: 0px;">
                                <button data-toggle="modal" data-target="#modal_ajax" onclick="showAjaxModal('<?php echo base_url();?>Home/popup/jsw/addnewuser');" class="btn btn-primary" style="float: right" > <i class="material-icons">person_add</i> Add New User</button>
                           </div> -->
                    <div class="bootstrap-data-table-panel card" style="margin: 5px 0;">
                        <div class="success_msg" style="display: none"></div><div class="error_msg" style="display: none"></div> 
                                      <?php   foreach($user_data as $row){?>
                                       <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-content">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <table class="table form">                                                
                                            <thead class="">

                                            <tr>
                                                <th>
                                                    Current Password:<span style="color:red;">*</span>
                                                </th>
                                                <th>
                                                    <input type="password" class="form-control" required="" autocomplete="off"  placeholder="Current Password" id="curr_password">
                                                </th>
                                            </tr>
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
                                      <?php } ?>
                        </div>
                   
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end row -->
            
        </div>
    </div>
            <!--Footer-->
           <?php include 'includes/footer.php';?>
            <!--/End Footer-->

        </div>
        
    </div>

<!--   Core JS Files   -->
 <?php include 'includes/footer-min.php';?>
<script>
   $(document).ready(function(){ 
    $("#updateUser").click(function(){
      $("#updateUser").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
        $curr_password = $("#curr_password").val(); 
        $password = $("#password").val();
        $confirm = $("#confirm").val();
                   
      $.post('<?php echo base_url();?>Account/updatePassword/<?php echo $row['user_id'];?>', {curr_password:$curr_password,password:$password,confirm:$confirm}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> Password Updated Successfully..<br> Logouting in 5 Sec...');
                                $(".success_msg").show();
                                window.location.reload(5000);
                                setTimeout(hidetab,4000);
                                 $("#updateUser").html('<i class="material-icons">save</i> Update Password');
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
</body>
</html>
