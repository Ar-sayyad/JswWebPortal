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
     
    <!-- End Navbar -->


    <div class="content">       
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 sideTwo" >       
                    <div class="sidebar-wrapper ps-scrollbar-y-rail sideMn">
                        
                         <?php include 'includes/newSidebar.php';?>       
                        
                    </div>
                </div>
                
                  <div class="col-lg-10 col-md-10 col-sm-10" id="MainView">
                      
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats" id="dvmsDiv" style="cursor: pointer;">
                                <div class="card-header card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">airplay</i>
                                    </div>
                                    <h4>DVMS DASHBOARD</h4>
                                </div>                              
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats"  id="mhsDiv" style="cursor: pointer;">
                                <div class="card-header card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">ondemand_video</i>
                                    </div>
                                    <h4>MHS DASHBOARD</h4>
                                </div>                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats"   id="bulDiv" style="cursor: pointer;">
                                <div class="card-header card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">desktop_mac</i>
                                    </div>
                                    <h4>BUL DASHBOARD</h4>
                                </div>                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats" id="emsDiv" style="cursor: pointer;">
                                <div class="card-header card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">laptop_mac</i>
                                    </div>
                                    <h4>EMS DASHBOARD</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats" id="operationalDiv" style="cursor: pointer;">
                                <div class="card-header card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">build</i>
                                    </div>
                                    <h4>OPERATIONAL REPORTS</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats" id="electricalDiv" style="cursor: pointer;">
                                <div class="card-header card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">settings_input_hdmi</i>
                                    </div>
                                    <h4>ELECTRICAL REPORTS</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                              <div class="card card-stats" id="mechanicalDiv" style="cursor: pointer;">
                                  <div class="card-header card-header-icon">
                                      <div class="card-icon">
                                          <i class="material-icons">settings</i>
                                      </div>
                                      <h4>MECHANICAL REPORTS</h4>
                                  </div>
                              </div>
                          </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats" id="manualformsDiv" style="cursor: pointer;">
                                <div class="card-header card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">note_add</i>
                                    </div>
                                    <h4>MANUAL FORMS</h4>
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
<script>
    $(document).ready(function(){            
        $("#dvmsDiv").click(function(){
            $(".Menus").hide();
            $("#dvmsMenu").show();
             sessionStorage.setItem("divShow", "dvmsMenu");           
        });
         $("#mhsDiv").click(function(){
            $(".Menus").hide();
            $("#mhsMenu").show();
            sessionStorage.setItem("divShow", "mhsMenu");   
        });
         $("#bulDiv").click(function(){
            $(".Menus").hide();
            $("#bulMenu").show();
             sessionStorage.setItem("divShow", "bulMenu");   
        });
         $("#emsDiv").click(function(){
            $(".Menus").hide();
            $("#emsMenu").show();
            sessionStorage.setItem("divShow", "emsMenu");    
        });
         $("#operationalDiv").click(function(){
            $(".Menus").hide();
            $("#operationalMenu").show();
            sessionStorage.setItem("divShow", "operationalMenu");   
        });
        $("#electricalDiv").click(function(){
            $(".Menus").hide();
            $("#electricalMenu").show();
            sessionStorage.setItem("divShow", "electricalMenu");    
        });
        $("#mechanicalDiv").click(function(){
            $(".Menus").hide();
            $("#mechanicalMenu").show();
            sessionStorage.setItem("divShow", "mechanicalMenu");    
        });
        $("#manualformsDiv").click(function(){
            $(".Menus").hide();
            $("#manualformsMenu").show();
            sessionStorage.setItem("divShow", "manualformsMenu");   
        });
         var sess = sessionStorage.getItem("divShow");
          $("#"+sess).show();
    });
    </script>
</body>
</html>
