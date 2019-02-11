<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>Theme/assets/img/logo.png">
<link rel="icon" type="image/png" href="<?php echo base_url();?>Theme/assets/img/logo.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>
 <?php echo $title;?> | JSW Dashboard
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="<?php echo base_url();?>Theme/assets/css/font-awesome.min.css">
<!-- CSS Files -->
<link href="<?php echo base_url();?>Theme/assets/css/material-dashboard.min40a0.css" rel="stylesheet" />

<link href="<?php echo base_url();?>Theme/assets/demo/demo.css" rel="stylesheet" />

</head>

    <body class="off-canvas-sidebar">

 
<!-- End Navbar -->
<div class="wrapper wrapper-full-page">

<div class="page-header login-page header-filter" filter-color="black" style="background-image: url('<?php echo base_url();?>Theme/assets/img/landing-bg.jpg'); background-size: cover; background-position: top center;">

  <div class="container">
    <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
      <form class="form" method="" action="#">
        <div class="card card-login">
          <div class="card-header card-header-rose text-center">
              <h4 class="card-title"> <img class="main_logo" style="width:150px;" src="<?php echo base_url();?>Theme/assets/img/logo.png" /></h4>
                <small id="res" class="display-block"></small>
          </div>
          <div class="card-body ">          
           
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
               <input type="password" id="new_password" name="new_password" autocomplete="off" class="form-control" placeholder="New Password...">
              </div>
            </span>
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                  <input type="password" id="confirm_password" name="confirm_password" autocomplete="off" class="form-control" placeholder="Confirm Password...">
              </div>
            </span>
          </div>
          <div class="card-footer justify-content-center">
              <button  type="button" name="save" id="changePasswordbtn" class="btn btn-info btn-lg"><i class="material-icons">lock_outline</i> Change Password</button>
          </div>
            <div class="card-footer justify-content-center">
                <a href="<?php echo base_url();?>Login" style="float: right;">Login</a>
            </div>
        </div>
      </form>
    </div>
  </div>
 

</div>

          
        </div>

<!--   Core JS Files   -->
<script src="<?php echo base_url();?>Theme/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
            $(document).ready(function() {
                 $('#confirm_password').keydown(function(event){    
            if(event.keyCode==13){
               $('#changePasswordbtn').trigger('click');
            }
        });
                $('#changePasswordbtn').click(function(){
                   // alert("hello");
                 $('#res').html("<img style='width:25px;height:25px;'  src='<?php echo base_url();?>Theme/assets/img/loading.gif'>");
                $new_password = $('#new_password').val();
                $confirm_password = $('#confirm_password').val();
               if($new_password == '' || $confirm_password == '')
               {
                   //alert('Please enter all login details.');
                    $('#res').html("<span style='color:red;text-transform:capitalize;font-size:13px'>Enter All details..!</span>");
                   return false;
               }
//               $(this).attr('disabled','disabled');
               $.post('<?php echo base_url();?>Home/changePassword',{ new_password:$new_password,confirm_password:$confirm_password},function(data){
                   //alert(data);
                  if(data==1) 
                  {	
                  	  $('#res').html("<span style='color:green;text-transform:capitalize;font-size:13px'>Password Changed Successfully..!</span><br><img style='width:25px;height:25px;' src='<?php echo base_url();?>Theme/assets/img/loading.gif'><br><span style='font-size:12px'>Redirecting.....</span>");
                   
                          window.location="<?php echo base_url();?>";
                  }else{
//                    
                      $('#res').html("<span style='color:red;text-transform:capitalize;font-size:14px'>"+data+"</span>");
                  }
               });
            });
            });
            
        </script>
    </body>

</html>
