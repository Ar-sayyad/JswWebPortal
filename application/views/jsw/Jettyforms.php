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
                        
                        <?php include 'includes/newSidebar.php';?>
                    </div>
                </div>
                
                 <div class="col-lg-10 col-md-10 col-sm-10" id="MainView">
                          <div class="addbtn" style="margin-top: 0px;">
                                <button data-toggle="modal" data-target="#modal_ajax" onclick="showAjaxModal('<?php echo base_url();?>Home/popup/jsw/addJettyData');" class="btn btn-primary" style="float: right" > <i class="material-icons">add_circle_outline</i> Add Barge Status</button>
                           </div> 
                    <div class="bootstrap-data-table-panel card" style="margin: 5px 0;">
                            <div class="table-responsive">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered table-hover">   
                                    <thead>
                                      <tr>
                                        <th style="width: 2%;">SR</th>
                                        <th style="width: 8%;">Date</th>
                                        <th style="width: 7%;">Mother <br>Vessel</th>
                                        <th style="width: 7%;">Un. Discharge</th>
                                        <th style="width: 7%;">Wait Discharge</th>
                                        <th style="width: 7%;">R-19 Waiting<BR>(Loaded)</th>
                                        <th style="width: 7%;">Gulf-Waiting<BR>(Loaded)</th>
                                        <th style="width: 8%;">MV/GULL to Jetty</th>
                                        <th style="width: 8%;">Under <br>Loading at MV</th>
                                        <th style="width: 8%;">Waiting for Loading</th>
                                        <th style="width: 5%;">Waiting <br>at Jetty</th>
                                        <th style="width: 10%;">Empty at Gull R-19</th>
                                        <th style="width: 8%;">In Transit-<br>from Jetty to MV</th>
                                        <th style="width: 8%;">Breakdown/off hired</th>
                                      </tr>
                                    </thead>
                                   
                                    <tbody>
                                      <?php  if(!empty($JettyForm_data)){  $sr=1; foreach($JettyForm_data as $jetty){?>
                                        <tr>
                                        <td><?php echo $sr;?></td>   
                                        <td><?php echo $jetty['date'];?></td>
                                        <td><?php echo $jetty['Mother_Vessel_Name'];?></td>
                                        <td><?php echo $jetty['At_Jetty_under_discharge'];?></td>
                                        <td><?php echo $jetty['At_Jetty_waiting_for_discharge'];?></td>
                                        <td><?php echo $jetty['At_R_19_waiting_loaded'];?></td>
                                        <td><?php echo $jetty['At_gulf_waiting_loaded'];?></td>
                                        <td><?php echo $jetty['In_transit_from_MV_GULL_toJetty_Loaded'];?></td>
                                        <td><?php echo $jetty['Under_loading_at_MV'];?></td>
                                        <td><?php echo $jetty['Waiting_for_Loading'];?></td>
                                        <td><?php echo $jetty['Waiting_at_jetty'];?></td>
                                        <td><?php echo $jetty['Empty_at_gull_R_19'];?></td>
                                        <td><?php echo $jetty['In_transit_from_jetty_to_MV'];?></td>
                                        <td><?php echo $jetty['Breakdown_offHired'];?></td>
                                      </tr>
                                      <?php $sr++; } }?>                                     
                                     
                                    </tbody>
                                </table>
                            </div>
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
    $( "form" ).on( "submit", function() {    
      $("#Search").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
      $Month= $("#month").val();
      $year= $("#year").val();
          //alert($Month);
            if($Month =='' || $year ==''){
                          $(".error_msgg").html('All Fields are Required..!');
                          $(".error_msgg").show();
                          setTimeout(hidetab,4000);
                          $("#Search").html('<i class="material-icons">search</i> Search');
                           return false;
                  }
                  else{
                      return true;
                  }
            
	function hidetab(){    
            $('#mssg').hide();
            $('.error_msgg').hide();
          }	
      
    });
});
</script>    
</body>
</html>
