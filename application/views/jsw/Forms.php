<!DOCTYPE html>
<html lang="en">
<?php include 'includes/header.php';?> 
    
    <body class="">
        <div class="wrapper ">
      <!-- Sidebar -->
      <?php include 'includes/sidebar.php';?>       

    <!-- End Sidebar -->  

<div class="main-panel">
    <!-- Navbar -->
      <?php include 'includes/navbar.php';?>       

    <!-- End Navbar -->


    <div class="content">
        <div class="container-fluid" style="">
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
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" id="email" name="email" autocomplete="off" class="form-control" placeholder="Email...">
              </div>
            </span>
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password...">
              </div>
            </span>
          </div>
          <div class="card-footer justify-content-center">
              <button  type="button" name="save" id="loginbtn" class="btn btn-info btn-lg"><i class="material-icons">send</i> Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>

            </div>

            <!--Footer-->
           <?php include 'includes/footer.php';?>
            <!--/End Footer-->

        </div>
        
    </div>

<!--   Core JS Files   -->
 <?php include 'includes/footer-min.php';?>

</body>
</html>
