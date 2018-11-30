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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ">   
                                <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
                                     <div class="card-header card-header-rose text-center">
                                    <h3 class="card-title"> <?php echo $title;?> </h3>
                                      <small id="res" class="display-block"></small>  
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
                                            <div class="card-footer justify-content-center">
                                               <button  type="button" name="save" id="loginbtn" class="btn btn-info btn-lg"><i class="material-icons">send</i> Submit</button>
                                            </div>
                                    </div> 
                                 </div>
                        </div>
                    </div>
                </div>
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
