<?php include 'includes/header.php';?> 

    <body class="">
        <div class="wrapper ">
          
          
                
      <!-- Sidebar -->
      <?php //include 'includes/newSidebar.php';?>       

    <!-- End Sidebar -->  
       

<div class="main-panel">
    <!-- Navbar -->
      <?php include 'includes/navbar.php';?>       

    <!-- End Navbar -->


      <div class="content">
        <div class="container-fluid">
            <div class="row">
                 <div class="col-lg-2 col-md-2 col-sm-2 sideTwo">       
                    <div class="sidebar-wrapper ps-scrollbar-y-rail sideMn" style="">                        
                        <?php include 'includes/newSidebar.php';?>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10" id="MainView">
                      
                    <h2 style="color:red;text-align:center;margin-top:10%;font-size:36px;font-weight:bold"><?php echo $title;?><br /><br />
                    </h1>
                    <h5 style="color:black;text-align:center;">We are Sorry... You have Limited Access. You can't access this page..!</h5>

                            <!--<button style="float:right" id="fullscreen" class="btn btn-fullscreen button"><i class="material-icons" style="font-size: 50px;">fullscreen</i></button>-->
                        
                        <!-- end content-->
                      
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

</body>
</html>
