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
                                <button data-toggle="modal" data-target="#modal_ajax" onclick="showAjaxModal('<?php echo base_url();?>Home/popup/jsw/addRateData');" class="btn btn-primary" style="float: right" > <i class="material-icons">add_circle_outline</i> Add Rate Form Data</button>
                           </div> 
                    <div class="bootstrap-data-table-panel card" style="margin: 5px 0;">
                            <div class="table-responsive">
                                <table id="bootstrap-data-table-export" class="table table-bordered table-hover">   
                                    <thead  style="background-color: rgba(0,0,0,.2);">
                                      <tr>
                                        <th>SR</th>
                                        <th>Date</th>
                                        <th>Rate</th>
                                        <th>Description</th>
                                        <!--<th>Remove</th>-->
                                      </tr>
                                    </thead>
                                   
                                    <tbody>
                                      <?php  if(!empty($RateForm_data)){  $sr=1; foreach($RateForm_data as $rate){?>
                                        <tr>
                                        <td><?php echo $sr;?></td>   
                                        <td><?php echo $rate['date'];?></td>
                                        <td><i class="fa fa-inr"></i><?php echo $rate['Rate'];?></td>
                                        <td><?php echo $rate['Description'];?></td>
<!--                                        <td><a rel="tooltip" title="Remove" class="btn btn-danger btn-sm" onclick="return checkDelete();" href="<?php echo base_url(); ?>CargoDespatch/delete/<?php echo  $cargo['Id'];?>">
                                            <i class="material-icons">close</i>
                                            </a>
                                        </td>-->
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
