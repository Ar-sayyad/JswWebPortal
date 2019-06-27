<!DOCTYPE html>
<html lang="en">
<?php include 'includes/header.php';?> 
  <style>
        .form-row{
        padding: 5px;
        border: 2px solid #000000;
        border-radius: 5px;
        margin: 0px;
        }
        </style>
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
<!--                          <div class="addbtn" style="margin-top: 0px;">
                                <button data-toggle="modal" data-target="#modal_ajax" onclick="showAjaxModal('<?php echo base_url();?>Home/popup/jsw/addEquipmentDelayData');" class="btn btn-primary" style="float: right" > <i class="material-icons">add_circle_outline</i> Add Equipment Delay Data</button>
                           </div> -->
                    <div class="bootstrap-data-table-panel card" style="margin: 5px 0;">
                            <div class="row form-row">
                            <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                            <form action="<?php echo base_url();?>EquipmentDelay/searchEquipmentDelay" method="POST" enctype="multipart/form-data"  class="searchform">
                            <table class="table form"> 
                                <thead>
                                    <tr>
                                        <th>
                                            From Date:<span style="color:red;">*</span>      
                                        </th>
                                        <th>
                                                <input type="date" class="form-control" name="formdate" value="<?php echo $formdate;?>" placeholder="Date" required=""  id="formdate">
                                        </th>
                                        <th>
                                           To Date:<span style="color:red;">*</span>    
                                        </th>
                                        <th>
                                           <input type="date" class="form-control" name="todate"  value="<?php echo $todate;?>" placeholder="Date" required=""  id="todate">
                                        </th> 
                                        <th>
                                            <button type="submit" name="search" data-id="hello" id="searchData" class="btn btn-primary" value="save"><i class="material-icons">search</i> Search</button>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </form> 
                             </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div>
                            </div>
                            <div class="table-responsive">
                                <table id="bootstrap-data-table-export" class="table table-bordered table-hover">   
                                    <thead  style="background-color: rgba(0,0,0,.2);">
                                      <tr>
                                        <th>SR</th>
                                        <th>Date</th>
                                        <th>Delay Start Time</th>
                                        <th>Delay End Time</th>
                                        <th>Delay Time</th>
                                        <th>Equipment Name</th>
                                        <th>Operator Name</th>
                                        <th>Main Delay</th>
                                        <th>Remarks</th>
                                        <th>Edit</th>
                                        <!--<th>Remove</th>-->
                                      </tr>
                                    </thead>
                                   
                                    <tbody>
                                      <?php  if(!empty($EquipmentDelay_data)){  $sr=1; foreach($EquipmentDelay_data as $equip){?>
                                        <tr>
                                        <td><?php echo $sr;?></td>
                                        <td><?php echo $equip['date'];?></td>
                                        <td><?php echo $equip['Delay_start_Time'];?></td>
                                        <td><?php echo $equip['Delay_end_time'];?></td>
                                        <td><?php echo $equip['Delay_Time'];?></td>
                                        <td><?php echo $equip['Equipment_Name'];?></td>
                                        <td><?php echo $equip['Operator_Name'];?></td>
                                        <td><?php echo $equip['MainDelay'];?></td>
                                        <td><?php echo $equip['Remarks'];?></td>
                                        <td><a rel="tooltip" title="Edit" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_ajax"  href="#" onclick="showAjaxModal('<?php echo base_url();?>Home/popup/jsw/editEquipmentDelay/<?php echo  $equip['Id'];?>');">
                                            <i class="material-icons">edit</i>
                                            </a>
                                        </td>
<!--                                        <td><a rel="tooltip" title="Remove" class="btn btn-danger btn-sm" onclick="return checkDelete();" href="<?php echo base_url(); ?>MBC/delete/<?php echo  $mbc['Id'];?>">
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
