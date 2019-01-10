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
                                                    Name:<span style="color:red;">*</span>
                                                </th>
                                                <th>
                                                    <input type="text" class="form-control" required="" value="<?php echo $row['emp_name'];?>" placeholder="Employee Name" id="emp_name">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Email:<span style="color:red;">*</span>
                                                </th>
                                                <th>
                                                    <input type="text" class="form-control" required="" readonly="" value="<?php echo $row['email'];?>" autocomplete="off" placeholder="Email" id="email">
                                                </th>
                                            </tr>

                                            <tr>
                                                <th>
                                                   Department:<span style="color:red;">*</span>
                                                </th>
                                                <th>
                                                    <input type="hidden" value="<?php echo $row['userType'];?>" id="userType"/>
                                                    <input type="text" class="form-control" required="" readonly="" value="<?php echo $row['Dept'];?>" data-id="<?php echo $row['userType'];?>" autocomplete="off" placeholder="Email" id="dept" name="dept">
                                                   
                                                </th>
                                            </tr>
                                                <tr>
                                                    <th colspan="4" style="text-align:center">
                                                        <button type="button" name="save" data-id="hello" id="updateUser" class="btn btn-success" value="save"><i class="material-icons">save</i> Update</button>
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
        $emp_name = $("#emp_name").val(); 
        //$email = $("#email").val();
       // $password = $("#password").val();
        //$dept = $("#dept").val();
        //$userType = $("#userType").val();
                   
      $.post('<?php echo base_url();?>Account/update/<?php echo $row['user_id'];?>', {emp_name:$emp_name}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> User Updated Successfully');
                                $(".success_msg").show();
                               // window.location.reload();
                                setTimeout(hidetab,4000);
                                 $("#updateUser").html('<i class="material-icons">save</i> Update');
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#updateUser").html('<i class="material-icons">save</i> Update');
                          }
		});
      
    });
  
});
</script>   
</body>
</html>
